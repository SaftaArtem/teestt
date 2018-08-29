<?php
namespace Pulsestorm\TutorialObjectPreference\Model;
use Pulsestorm\TutorialObjectManager2\Model\Message;

class Messenger3 extends Message
{
    public function getMessage()
    {
        return 'Injection?  We don\'t need no stinking injection!';
    }
}