<?php


    class Link implements Reader
    {
        private $data;

        public function __construct(JSON $data)
        {
            $this->data = $data;
        }

        public function getContent(): Generator
        {
            $links = $this->data->getDataByType('text');

            foreach ($links as $link) {
                yield $link->text;
            }
        }
    }