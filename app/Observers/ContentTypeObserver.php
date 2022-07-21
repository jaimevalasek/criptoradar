<?php

namespace App\Observers;

use App\Models\ContentType;
use Illuminate\Support\Str;

class ContentTypeObserver
{
    /**
     * @param ContentType $contentType
     * @return void
     */
    public function creating(ContentType $contentType)
    {
        $contentType->slug = Str::slug($contentType->name);
    }

    /**
     * @param ContentType $contentType
     * @return void
     */
    public function updating(ContentType $contentType)
    {
        $contentType->slug = Str::slug($contentType->name);
    }
}
