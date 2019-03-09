<?php

namespace Avasa\Vision;

use App\Http\Controllers\Controller;
use Google\Cloud\Vision\Annotation;
use Google\Cloud\Vision\Image;
use Google\Cloud\Vision\VisionClient;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Support\Facades\Storage;

class GoogleVisionApi extends Controller
{
    /**
     * @type VisionClient
     */
    private $client;

    /**
     * @type Image
     */
    private $image;

    /**
     * GoogleVisionApi constructor.
     */
    public function __construct()
    {
        $this->authenticate();
    }

    /**
     * Authenticate google vision clients using your key file
     */
    private function authenticate()
    {
        $this->client = new VisionClient(['keyFile' => json_decode($this->getKey(), true)]);
    }

    /**
     * @param string $imagePath
     * @param string $scanType
     * @throws FileNotFoundException
     */
    public function scan(string $imagePath, GoogleVisionScanTypes $scanType)
    {
        $this->image = $this->client->image(Storage::disk('local')->get($imagePath), [(string) $scanType]);
    }

    /**
     * @return Annotation
     */
    public function get() : Annotation
    {
        return $this->client->annotate($this->image);
    }

    /**
     * @return string
     * @throws FileNotFoundException
     */
    private function getKey() : string
    {
        return Storage::disk('local')->get(config('vision.api_key'));
    }
}