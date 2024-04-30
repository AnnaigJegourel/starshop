<?php

namespace App\Model;

use App\Model\StarshipStatusEnum;

class Starship
{
    public function __construct(
        private int $id,
        private string $name,
        private string $class,
        private string $captain,
        private StarshipStatusEnum $status,
    )
    {

    }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Get the value of class
         */ 
        public function getClass()
        {
                return $this->class;
        }

        /**
         * Get the value of captain
         */ 
        public function getCaptain()
        {
                return $this->captain;
        }

        /**
         * Get the value of status
         */ 
        public function getStatus() : StarshipStatusEnum
        {
                return $this->status;
        }

        public function getStatusString()
        {
                return $this->status->value;
        }

        public function getStatusImageFilename(): string
        {
                return match ($this->status) {
                        StarshipStatusEnum::WAIING => '/images/status-waiting.png',
                        StarshipStatusEnum::IN_PROGRESS => '/images/status-in-progress.png',
                        StarshipStatusEnum::COMPLETED => '/images/status-complete.png',
                };
        }
}