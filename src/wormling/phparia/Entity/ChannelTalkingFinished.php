<?php

/*
 * Copyright 2014 Brian Smith <wormling@gmail.com>.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace phparia\Entity;

/**
 * Talking is no longer detected on the channel.
 *
 * @author Brian Smith <wormling@gmail.com>
 */
class ChannelTalkingFinished extends Event
{
    /**
     * @var Channel The channel on which talking completed.
     */
    private $channel;
    
    /**
     * @var int The length of time, in milliseconds, that talking was detected on the channel 
     */
    private $duration;

    /**
     * @return Channel The channel on which talking completed.
     */
    public function getChannel()
    {
        return $this->channel;
    }
    
    /**
     * @return int The length of time, in milliseconds, that talking was detected on the channel
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param string $jsonResponse
     */
    public function __construct($jsonResponse)
    {
        parent::__construct($jsonResponse);

        $this->channel = $this->response->channel;
        $this->duration = $this->response->duration;
    }

}