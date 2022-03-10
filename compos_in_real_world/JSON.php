<?php

    class JSON
    {
        private $data;

        public function __construct(string $file)
        {
            $this->processFile($file);
        }

        public function processFile(string $file)
        {
            $contents = file_get_contents($file);
            $array = json_decode($contents);
            $arrayReverse = array_reverse($array);
            $this->data = $arrayReverse;
        }

        public function getData(): array
        {
            return $this->data;
        }

        public function getDataByType(string $type): array
        {
            $result = [];
            $data = $this->getData();

            foreach ($data as $entry) {
                if ($entry->type === $type) {
                    array_push($result, $entry);
                }
            }

            return $result;
        }
    }