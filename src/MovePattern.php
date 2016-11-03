<?php
namespace Dk20161030;

class MovePattern
{
    /**
     * @var int
     */
    private $x;
    /**
     * @var int
     */
    private $y;
    /**
     * @var string
     */
    private $targetType;

    public function __construct(int $x, int $y, string $targetType)
    {
        $this->x = $x;
        $this->y = $y;
        $this->targetType = $targetType;
    }

    /**
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @return string
     */
    public function getTargetType()
    {
        return $this->targetType;
    }

    /**
     * @param MovePattern $target
     * @return bool
     */
    public function equalTo(MovePattern $target)
    {
        return $this->x === $target->x && $this->y === $target->y && $this->targetType === $target->targetType;
    }
}
