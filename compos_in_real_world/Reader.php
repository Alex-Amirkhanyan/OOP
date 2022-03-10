<?php

    interface Reader
    {
        public function __construct(JSON $data);

        public function getContent(): Generator;
    }