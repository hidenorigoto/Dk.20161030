<?php
namespace Dk20161030;

class App
{
    /**
     * @var Pentagon[]
     */
    private $pentagonTypes = [];

    /**
     * @var array [x,y,type,directionIndex]
     */
    private $current;

    private $history = [];

    private $number = -1;

    public function init()
    {
        $pentagonA = new Pentagon('a');
        $pentagonA
            ->addMovePattern(new MovePattern(1,1,'d'))
            ->addMovePattern(new MovePattern(0,0,'b'))
            ->addMovePattern(new MovePattern(0,0,'c'))
            ->addMovePattern(new MovePattern(0,0,'d'))
            ->addMovePattern(new MovePattern(-1,1,'b'))
        ;

        $pentagonB = new Pentagon('b');
        $pentagonB
            ->addMovePattern(new MovePattern(1,1,'c'))
            ->addMovePattern(new MovePattern(2,0,'d'))
            ->addMovePattern(new MovePattern(1,-1,'a'))
            ->addMovePattern(new MovePattern(0,0,'c'))
            ->addMovePattern(new MovePattern(0,0,'a'))
        ;

        $pentagonC = new Pentagon('c');
        $pentagonC
            ->addMovePattern(new MovePattern(0,0,'a'))
            ->addMovePattern(new MovePattern(0,0,'b'))
            ->addMovePattern(new MovePattern(1,-1,'d'))
            ->addMovePattern(new MovePattern(-1,-1,'b'))
            ->addMovePattern(new MovePattern(0,0,'d'))
        ;

        $pentagonD = new Pentagon('d');
        $pentagonD
            ->addMovePattern(new MovePattern(0,0,'a'))
            ->addMovePattern(new MovePattern(0,0,'c'))
            ->addMovePattern(new MovePattern(-1,-1,'a'))
            ->addMovePattern(new MovePattern(-2,0,'b'))
            ->addMovePattern(new MovePattern(-1,1,'c'))
        ;

        $this->pentagonTypes['a'] = $pentagonA;
        $this->pentagonTypes['b'] = $pentagonB;
        $this->pentagonTypes['c'] = $pentagonC;
        $this->pentagonTypes['d'] = $pentagonD;

        $this->current = [
            'x' => 0,
            'y' => 0,
            'type' => 'c',
            'directionIndex' => 0]
        ;
        $this->pushHistory();
    }

    /**
     * @param string $input
     * @return string
     */
    public function solve(string $input)
    {
        foreach ($this->inputChars($input) as $char) {
            if ($this->$char() !== true) {
                $result = $this->history[$this->createPositionKey()];
                return sprintf('%d,%s', $this->number + 1, $result['number']);
            }
        }

        return '-';
    }

    private function F()
    {
        $pattern = $this->pentagonTypes[$this->current['type']]->getMovePattern($this->current['directionIndex']);
        
        $inverse = new MovePattern($pattern->getX() * -1, $pattern->getY() * -1, $this->current['type']);
        
        $this->current['x'] += $pattern->getX();
        $this->current['y'] += $pattern->getY();
        $this->current['type'] = $pattern->getTargetType();
        $this->current['directionIndex'] = $this->pentagonTypes[$this->current['type']]->findIndexByPattern($inverse);

        $solved = $this->solved();

        if (!$solved) {
            $this->pushHistory();
        }

        return !$solved;
    }
    private function a()
    {
        $this->current['directionIndex']++;
        if ($this->current['directionIndex'] > 4) {
            $this->current['directionIndex'] = 0;
        }

        return true;
    }
    private function c()
    {
        $this->current['directionIndex']--;
        if ($this->current['directionIndex'] < 0) {
            $this->current['directionIndex'] = 4;
        }

        return true;
    }

    private function inputChars(string $input)
    {
        $length = strlen($input);
        for ($i = 0; $i < $length; $i++) {
            yield $input[$i];
        }
    }

    /**
     * @return bool|mixed
     */
    private function solved()
    {
        $targetKey = $this->createPositionKey();

        return array_key_exists($targetKey, $this->history);
    }

    private function pushHistory()
    {
        $this->number++;
        $key = $this->createPositionKey();

        $this->history[$key] = [
            'number' => $this->number,
            'data'   => $this->current,
        ];
    }

    private function createPositionKey()
    {
        return sprintf('%s,%s,%s', $this->current['x'], $this->current['y'], $this->current['type']);
    }
}
