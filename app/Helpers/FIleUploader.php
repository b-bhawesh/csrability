<?php

namespace App\Helper\FileUploader;
use Illuminate\Http\UploadedFile;
use Image;

class FileUploader
{
    private $image;
    private $imageName;
    private $imageRealPath;
    
    
    /**
     * @return string
     */
    public function getImageName()
    {
        return $this->imageName;
    }
    
    
    /**
     * Uploads a file to a specific location
     * 
     * @param UploadedFile $image
     * @param string $destination
     * @return FileUploader
     */
        

    public function upload($image, string $destination)
    {
        
        $this->image = $image;
        
        $this->imageRealPath = $this->image->getRealPath();
       
        $this->imageName = md5(microtime()).'.'.$this->image->getClientOriginalExtension();
                
        $this->image->move($destination, $this->imageName);
        
        return $this;
    }
    
    /**
     * Function to resize an image, get called by channing upload function
     * 
     * @param int $height
     * @param int $width
     * @param string $source
     * @param string $destination
     * @param bool $ratio
     * @return FileUploader
     */ 
    public function resize(int $height, int $width, string $source=null, string $destination=null, bool $ratio=false)
    {       
        if($ratio)
        {
            Image::make($source.'/'.$this->imageName)->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destination.'/'.$this->imageName);
        }
        else
        {
            Image::make($source.'/'.$this->imageName)->resize($width, $height)->save($destination.'/'.$this->imageName);
        }        
        
        return $this;
    }
}