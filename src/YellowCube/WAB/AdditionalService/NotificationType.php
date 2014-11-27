<?php

namespace YellowCube\WAB\AdditionalService;

use YellowCube\Util\SimpleValue;

class NotificationType extends SimpleValue implements AdditionalService
{
    const TEL = '1';
    const FAX = '2';
    const SMS = '3';
    const EMAIL = '4';
}
