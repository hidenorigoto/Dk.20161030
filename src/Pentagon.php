<?php
namespace Dk20161030;

class Pentagon
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var MovePattern[]
     */
    private $movePatterns = [];

    /**
     * Pentagon constructor.
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * @param MovePattern $move
     * @return $this
     */
    public function addMovePattern(MovePattern $move)
    {
        $this->movePatterns[] = $move;

        return $this;
    }

    /**
     * @param int $index
     * @return MovePattern
     */
    public function getMovePattern(int $index)
    {
        return $this->movePatterns[$index];
    }

    /**
     * @param $inverse
     * @return int
     */
    public function findIndexByPattern($inverse)
    {
        foreach ($this->movePatterns as $index=>$pattern)
        {
            if ($pattern->equalTo($inverse)) return $index;
        }

        throw new \LogicException('Could not find move pattern');
    }
}
