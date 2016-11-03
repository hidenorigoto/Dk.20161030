<?php
namespace Dk20161030;

class AppTest extends \PHPUnit_Framework_TestCase
{
    public function testMain()
    {
        /*0*/ $this->test( "FcFcFaF", "3,0" );
        /*1*/ $this->test( "FccFaaFcFcF", "-" );
        /*2*/ $this->test( "ccFaF", "-" );
        /*3*/ $this->test( "cFcFaaF", "-" );
        /*4*/ $this->test( "aFccFcFcF", "4,1" );
        /*5*/ $this->test( "cFaFaFaFaaF", "4,0" );
        /*6*/ $this->test( "cFccFaFaaFaF", "5,1" );
        /*7*/ $this->test( "cFaaFaaFcFcFccF", "5,2" );
        /*8*/ $this->test( "aaFaFaaFaFccFaFccF", "6,0" );
        /*9*/ $this->test( "aaFaaFcFccFcFccFccFaF", "6,1" );
        /*10*/ $this->test( "aFccFccFaaFccFcFcFcFaF", "7,4" );
        /*11*/ $this->test( "ccFaaFaaFaFccFaaFaFcFccFaaF", "-" );
        /*12*/ $this->test( "aaFaFaFcFaFaaFaFaFaaFccFaaFaaF", "8,3" );
        /*13*/ $this->test( "aaFccFaFaFccFaaFaaFaaFccFccFcFaFaF", "13,10" );
        /*14*/ $this->test( "aFaFaaFaaFaaFccFaFccFaFaaFccFccFaaFccF", "11,0" );
        /*15*/ $this->test( "ccFccFcFaaFaaFaFccFaaFaFcFaaFaaFcFcFcF", "10,2" );
        /*16*/ $this->test( "aaFaaFaaFccFccFaFaaFaaFaFccFcFcFccFaaFaFccFccF", "10,3" );
        /*17*/ $this->test( "ccFaFccFaaFaaFcFccFaFcFccFccFaaFccFaFaaFaFaFccF", "11,3" );
        /*18*/ $this->test( "cFcFaFaaFaFccFaaFcFaFaaFccFaFaaFccFaFcFaaFccFcF", "12,0" );
        /*19*/ $this->test( "cFaFaaFcFaaFaaFaFccFaaFcFaaFccFaaFccFaFcFccFaFaFaFcFcF", "19,16" );
        /*20*/ $this->test( "aFaFccFaaFccFccFaFccFaFaaFccFaaFccFcFccFaFaFccFaaFccFcF", "15,11" );
        /*21*/ $this->test( "aFccFccFccFaaFaaFcFcFaaFccFaFcFccFaaFaFcFaaFcFaFccFccFaFaF", "23,20" );
        /*22*/ $this->test( "cFaFaaFcFaFaaFccFccFaaFaFccFccFccFaFaFccFccFccFaaFcFcFcFaF", "22,18" );
        /*23*/ $this->test( "aFcFaFccFccFaFccFaaFaFaaFaaFaFcFaFcFcFcFaFaFaaFaaFaFaaFcFccFaF", "14,4" );
        /*24*/ $this->test( "cFaFaaFcFaFccFcFccFaFaaFaaFaFcFccFccFaFcFaFaaFccFaFaFccFcFaFaFaaF", "22,19" );
        /*25*/ $this->test( "aaFaaFaFcFccFaaFcFaaFccFaFaFcFaFaaFaFaFaFcFccFaFaaFcFcFccFccFccFcF", "16,11" );
        /*26*/ $this->test( "cFaaFaFcFaFaaFccFaaFaFccFccFaaFccFcFaFaaFaaFaFccFcFccFccFaFaaFcFcFaF", "26,23" );
        /*27*/ $this->test( "cFaaFccFaFcFaFcFaaFccFaFccFaaFcFaFaaFccFaaFccFcFaFaaFaFcFccFccFaFcFaaFccFcF", "-" );
        /*28*/ $this->test( "ccFccFaaFaFccFaaFaaFcFccFaaFaFcFccFccFccFaFaaFcFaFccFaaFcFcFaFccFaFccFaaFaaFaF", "-" );
        /*29*/ $this->test( "aaFccFaFccFccFaaFccFaFcFccFaFccFcFcFaFcFcFaaFaaFcFccFccFcFaFaaFaFcFcFaaFaaFaaF", "19,5" );
        /*30*/ $this->test( "aFaaFccFaFaaFaaFccFccFaFcFaaFaaFaaFccFaFccFaaFaaFaFccFccFcFaaFaFccFccFaFcFaaFccF", "-" );
        /*31*/ $this->test( "aaFaFaaFcFccFccFaFcFaaFaaFaFccFccFccFaFaaFccFcFaaFccFaaFccFaaFccFccFccFcFaaFcFaaFccF", "30,23" );
        /*32*/ $this->test( "aaFccFaFaaFccFcFaFccFaFcFccFaaFccFaFcFaaFccFaaFaFccFccFccFcFccFaFccFcFaaFaFcFccFcFaFaaF", "32,17" );
        /*33*/ $this->test( "ccFcFcFaFaaFaFaaFccFcFccFaFcFaFccFaaFcFccFcFaaFcFaaFcFaaFaaFcFaaFaFaFaFaaFccFaaFcFcFaFaF", "18,14" );
        /*34*/ $this->test( "ccFaFaaFaaFcFaaFaaFaaFaaFaaFaFccFcFaaFaFcFccFaaFcFaFaaFccFccFaaFcFaaFaaFaaFccFaaFcFcFaFaFccFaFcFccF", "17,0" );
        /*35*/ $this->test( "aaFccFccFaFcFaFcFaFccFccFccFaFccFccFcFaFcFaaFccFcFccFccFaaFcFccFaaFccFccFaFccFcFcFaaFaFccFcFaaFaaFcF", "24,11" );
        /*36*/ $this->test( "aaFccFaFccFaaFaaFcFaFcFaFcFaaFaaFccFaFcFaFaaFcFaaFaFcFaaFccFcFaaFccFaaFccFaaFccFcFaFcFaFccFaaFaaFccFaaF", "-" );
        /*37*/ $this->test( "aFaaFaFaaFcFccFaaFccFaFcFaaFccFccFcFcFaFaFcFccFcFccFaaFcFaFcFaaFcFaFaaFccFaaFccFaFaaFaFcFaFccFaFaaFaFaaF", "17,14" );
        /*38*/ $this->test( "aaFcFaaFccFaaFaaFcFaaFccFccFaFcFaFcFccFcFaaFaaFaFcFaFcFaaFcFaFaaFaFccFccFccFcFaFaFcFcFaFcFaaFcFaaFcFcFaaF", "27,23" );
        /*39*/ $this->test( "ccFaFccFaFcFaFccFcFaaFccFccFcFaFccFccFaaFaaFaFaaFcFaaFccFcFaaFcFccFaaFcFaFccFccFaFccFaaFaaFcFcFccFaFccFcFcF", "25,18" );
        /*40*/ $this->test( "cFcFccFaFaaFaaFccFccFcFccFccFaFcFaaFcFccFccFcFccFaFaFaFaFaFaaFaFcFaFccFcFccFaaFccFaaFccFcFaFaaFccFaFccFcFaaF", "16,4" );
        /*41*/ $this->test( "aFcFcFaaFcFaaFcFaFaaFaaFaaFaFcFccFccFccFaFaaFaFaaFaaFcFcFccFaFaaFcFaFaaFccFaaFcFccFcFcFccFaaFcFaFccFaaFaaFccF", "19,15" );
        /*42*/ $this->test( "ccFaaFcFaFccFaFccFaFcFaaFaaFccFaaFccFcFaFaFccFaFaaFaFaaFaFaaFaaFccFaaFaFcFaaFaFaFcFaaFcFaFaaFaaFcFccFaaFaFaFaF", "22,17" );
        /*43*/ $this->test( "aaFcFaaFaFcFccFccFaFaFccFaFaaFaFcFccFaaFaaFaaFcFccFccFaFaaFccFcFaFaFcFaaFcFcFcFccFccFaaFcFcFaFccFccFccFaaFcFaaFcF", "14,5" );
        /*44*/ $this->test( "cFcFaFccFaaFaFccFaFccFaaFaFccFaaFaaFccFaaFccFaaFccFaFaaFaFaFaaFaaFccFaFcFaaFcFcFaFaFcFcFcFaFaaFcFaFcFaaFccFccFcFaaFaFccF", "10,1" );
        /*45*/ $this->test( "ccFaFcFaaFcFccFaFccFaaFccFaaFaaFcFaaFccFaaFccFccFcFaaFaaFcFaaFccFaaFcFcFaaFaFaFccFcFaFaFaFccFccFccFccFccFccFcFcFccFccFcF", "25,13" );
        /*46*/ $this->test( "aFccFaFcFaFcFaaFaaFcFaaFccFaFaaFaFcFaFaaFaaFaaFccFaaFaaFccFccFccFccFccFaaFaFcFaFaFccFaFccFcFccFcFcFccFcFccFccFccFccFccFaF", "18,8" );
        /*47*/ $this->test( "cFaaFcFaaFaFcFccFaaFcFccFcFaFccFaaFaaFccFccFccFaFcFccFcFaaFcFcFccFcFccFaFaFccFccFcFaFaFaaFcFaFcFccFccFccFaaFaFaFccFcFccFccF", "25,22" );
        /*48*/ $this->test( "aaFcFccFcFaFcFaFaFcFccFaFaaFaFcFccFccFaaFccFccFaaFaaFccFaaFaaFccFaaFccFcFaaFaFcFaFcFccFaaFccFaFaFccFaaFcFaaFaFccFaaFaaFccFccFcFaF", "-" );
        /*49*/ $this->test( "aFaaFccFccFaaFaaFccFccFaaFaaFaFcFccFaFcFaaFaFccFaaFccFaFcFaFccFaaFaaFaFccFaFaaFaaFcFaaFccFaaFcFaFccFccFaaFaaFaaFaaFccFcFccFaaFaFaaFaaF", "-" );
        /*50*/ $this->test( "aaFcFccFccFaFccFaFccFaaFaaFaaFccFaaFaaFccFaaFccFaFaaFccFccFaaFcFccFaFccFcFaaFaFccFccFccFaaFaFccFccFaFaaFccFccFccFaaFccFccFaFaFcFaFccFccF", "-" );
    }

    private function test($input, $expected)
    {
        $app = new App();
        $app->init();
        $result = $app->solve($input);

        $this->assertThat($result, $this->equalTo($expected), 'test for ' . $input);
    }
}
