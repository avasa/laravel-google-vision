<?php

namespace Avasa\Vision;

use Spatie\Enum\Enum;

/**
 * Source: https://cloud.google.com/vision/docs/reference/rest/v1/Feature
 *
 * @method static self TYPE_UNSPECIFIED()
 * @method static self FACE_DETECTION()
 * @method static self LANDMARK_DETECTION()
 * @method static self LOGO_DETECTION()
 * @method static self LABEL_DETECTION()
 * @method static self TEXT_DETECTION()
 * @method static self DOCUMENT_TEXT_DETECTION()
 * @method static self SAFE_SEARCH_DETECTION()
 * @method static self IMAGE_PROPERTIES()
 * @method static self CROP_HINTS()
 * @method static self WEB_DETECTION()
 * @method static self OBJECT_LOCALIZATION()
 */
class GoogleVisionScanTypes extends Enum
{
}