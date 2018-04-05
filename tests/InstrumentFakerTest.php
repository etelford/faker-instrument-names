<?php

use Faker\Factory as Faker;
use Etelford\InstrumentFaker;

class InstrumentFakerTest extends \PHPUnit\Framework\TestCase
{
	public function setUp()
	{
		$this->faker = Faker::create();

		$instrumentFaker = new InstrumentFaker($this->faker);
		$this->faker->addProvider($instrumentFaker);

		parent::setUp();
	}

	/** @test */
	public function it_generates_a_random_instument_name()
	{
		$generatedInstrument = $this->faker->instrument;

		$this->assertTrue($this->findInstrument($generatedInstrument));
	}

    /** @test */
    public function it_generates_a_random_common_instument_name()
    {
        $instrument = $this->faker->commonInstrument;

        $this->assertTrue(in_array($instrument, InstrumentFaker::$instruments['common']));
    }

	/** @test */
	public function it_generates_a_random_wind_instument_name()
	{
		$instrument = $this->faker->windInstrument;

		$this->assertTrue(in_array($instrument, InstrumentFaker::$instruments['wind']));
	}

	/** @test */
	public function it_generates_a_random_string_instument_name()
	{
		$instrument = $this->faker->stringInstrument;

		$this->assertTrue(in_array($instrument, InstrumentFaker::$instruments['string']));
	}

	/** @test */
	public function it_generates_a_random_percussion_instument_name()
	{
		$instrument = $this->faker->percussionInstrument;

		$this->assertTrue(in_array($instrument, InstrumentFaker::$instruments['percussion']));
	}

	/** @test */
	public function it_generates_a_random_electronic_instument_name()
	{
		$instrument = $this->faker->electronicInstrument;

		$this->assertTrue(in_array($instrument, InstrumentFaker::$instruments['electronic']));
	}

	public function findInstrument($generatedInstrument)
	{
	    foreach (InstrumentFaker::$instruments as $group => $instruments) {
	        if (in_array($generatedInstrument, $instruments)) {
		    	return true;
		    }
	    }

	    return false;
	}
}
