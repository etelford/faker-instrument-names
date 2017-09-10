faker-instrument-names [![Build Status](https://travis-ci.org/etelford/faker-instrument-names.svg?branch=master)](https://travis-ci.org/etelford/faker-instrument-names)
=========

Create fake Instrument names with the help of [fzaninotto/Faker](https://github.com/fzaninotto/Faker).

Names of instruments were pulled and parsed from [MusicBrainz](https://musicbrainz.org/instruments).

Installation
------------

composer.json:

    "require": {
        "etelford/faker-instrument-names": "*"
    }

Example
-------

Make an instance of `Faker` and an instance of the `InstrumentFaker`, add it as a provider and call the instrument method you want.

```php
$faker = \Faker\Factory::create();
$generator = new \Etelford\InstrumentFaker($faker);
$faker->addProvider($generator);

// Get a random instrument name
echo $faker->instrument;

// Get a random wind instrument name
echo $faker->windInstrument;

// Get a random string instrument name
echo $faker->stringInstrument;

// Get a random percussion instrument name
echo $faker->percussionInstrument;

// Get a random electronic instrument name
echo $faker->electronicInstrument;
```