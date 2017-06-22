<?php namespace Nord\Lumen\FileManager\Adapters;

use Nord\Lumen\FileManager\Contracts\File;

class LocalAdapter extends DiskAdapter
{

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'local';
    }


    /**
     * @inheritdoc
     */
    public function getFilePath(File $file, array $options)
    {
        return (isset($options['path']) ? $options['path'] : '') . $this->createFilePath($file);
    }


    /**
     * @inheritdoc
     */
    public function getFileUrl(File $file, array $options)
    {
        return url($this->createFilePath($file));
    }
}
