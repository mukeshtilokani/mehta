<?php

namespace App\Jobs;

use File;
use Storage;
use Illuminate\Bus\Queueable;
use Intervention\Image\ImageManager;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ImageConversion implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var local image uplod name
     */
    protected $imageName;

    /**
     * @var logo s3 path
     */
    protected $localPath;

    /**
     * @var image conversions array
     */
    protected $conversions;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($imageName, $localPath, $conversions)
    {
        $this->imageName = $imageName;
        $this->localPath = $localPath;
        $this->conversions = $conversions;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(ImageManager $imageManager)
    {
        $imageName = $this->imageName;
        $localImagePath = $this->localPath.$imageName;
        $disk = Storage::disk('public');
        $mainImage = Storage::disk('public')->get($localImagePath);

        foreach ($this->conversions as $key => $value) {
            $image = null;
            if(isset($value['width']) && isset($value['height'])) {
                $image = $this->cropAndResize($mainImage, $value['width'], $value['height'], $imageManager);
            } else if(isset($value['width']) && !isset($value['height'])) {
                $image = $this->resizeImageProportionally($mainImage, $value['width'], null, $imageManager);
            } else if(!isset($value['width']) && isset($value['height'])) {
                $image = $this->resizeImageProportionally($mainImage, null, $value['height'], $imageManager);
            } else {
                continue;
            }

            $disk->put(
                $this->localPath.$key.'/'.$imageName,
                $image,
                'public'
            );
        }
    }

    /**
     * Crop & resize images
     * @return [string]
     */
    public function cropAndResize($path, $width, $height, $imageManager)
    {
        return (string) $imageManager->make($path)->fit($width, $height)->encode();
    }

    /**
     * Resize image proportionally
     * @return [string]
     */
    public function resizeImageProportionally($path, $width, $height, $imageManager)
    {
        // Resize the image to a width or height and constrain aspect ratio (auto width or height)
        return (string) $imageManager->make($path)->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        })->encode();
    }    
}
