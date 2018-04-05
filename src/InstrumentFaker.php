<?php

namespace Etelford;

class InstrumentFaker extends \Faker\Provider\Base
{
	// From https://musicbrainz.org/instruments
	public static $instruments = [
        'common' => ["12 String Guitar", "Accordion", "Acoustic Bass", "Acoustic Fretless Guitar", "Acoustic Guitar", "Alto Clarinet", "Alto Flute", "Alto Horn", "Alto Saxophone", "Autoharp", "Bagpipe", "Banjo", "Baritone Guitar", "Baritone Horn", "Baritone Saxophone", "Bass Clarinet", "Bass Drum", "Bass Flute", "Bass Guitar", "Bass Saxophone", "Bass Trombone", "Bass Trumpet", "Bass", "Bassoon", "Bell Tree", "Bells", "Bongos", "Brass", "Cajón", "Celesta", "Cello", "Chimes", "Clarinet", "Classical Guitar", "Clavichord", "Clavinet", "Concertina", "Congas", "Contrabass Clarinet", "Contrabass Flute", "Cornet", "Cymbals", "Double Bass", "Double Reed", "Drums", "E-flat Clarinet", "Effects", "Electric Bass", "Electric Cello", "Electric Fretless Guitar", "Electric Guitar", "Electric Piano", "Electric Upright Bass", "Electric Viola", "Electric Violin", "Electronic Drum Set", "Electronic Organ", "English Horn", "Euphonium", "EWI", "Fiddle", "Flugelhorn", "Flumpet", "Flute", "Fortepiano", "French Horn", "Fretless Bass", "Glockenspiel", "Gong", "Guitar", "Guitars", "Hammond Organ", "Handbells", "Harmonica", "Harmonium", "Harp", "Harpsichord", "Horn", "Keyboard Bass", "Keyboard", "Keyboards", "Keytar", "Lap Steel Guitar", "Lead Guitar", "Lute", "Mandolin", "Marimba", "Mellophone", "Melodica", "Natural Horn", "Nylon Guitar", "Oboe D'amore", "Oboe", "Organ", "Other Instruments", "Oud", "Pedal Steel Guitar", "Percussion", "Piano", "Piccolo Trumpet", "Piccolo", "Recorder", "Reeds", "Rhodes Piano", "Rhythm Guitar", "Saxophone", "Shakuhachi", "Shamisen", "Snare Drum", "Sopranino Saxophone", "Soprano Clarinet", "Sousaphone", "Spanish Acoustic Guitar", "Steel Guitar", "Steelpan", "Strings", "Synthesizer", "Tabla", "Talking Drum", "Tambourine", "Tenor Banjo", "Tenor Guitar", "Tenor Horn", "Tenor Saxophone", "Tenor Trombone", "Theremin", "Timbales", "Timpani", "Tom-tom", "Trombone", "Trumpet", "Tuba", "Tubular Bells", "Ukulele", "Upright Bass", "Upright Piano", "Valve Trombone", "Vibraphone", "Viola", "Violin", "Wagner Tuba", "Wind Instruments", "Woodwind", "Wurlitzer Electric Piano", "Xylophone", "Zither"],

		'other' => ["Bass", "Bullroarer", "Chainsaw", "Chimes", "Chirimía and Drum", "Effects", "Electric Piano", "Gamelan", "Gizmo", "Glass Harmonica", "Hardart", "Kazoo", "Lasso D'amore", "Musical Box", "Musical Saw", "Other Instruments", "Pūrerehua", "Suikinkutsu", "Talkbox", "Taonga Pūoro", "Tape", "Turntable(s)", "Vacuum Cleaner", "Żummara", "Pipe and Tabor", "Te Kū"],

		'wind' => ["Accordina", "Accordion", "Algozey", "Alphorn", "Alto Clarinet", "Alto Flute", "Alto Horn", "Alto Recorder", "Alto Saxophone", "Anglo Concertina", "Arghul", "Bagpipe", "Bandoneón", "Bansuri", "Baritone Horn", "Baritone Saxophone", "Baroque Trumpet", "Barrel Organ", "Bass Clarinet", "Bass Flute", "Bass Harmonica", "Bass Oboe", "Bass Recorder", "Bass Saxophone", "Bass Trombone", "Bass Trumpet", "Basset Clarinet", "Basset Horn", "Bassoon", "Bawu", "Bayan", "Bazooka", "Bellow-blown Bagpipes", "Birch Lur", "Boatswain's Pipe", "Bombarde", "Brass", "Bronze Lur", "Bugle", "Buisine", "Button Accordion", "Calliope", "C-bass Recorder", "Cembalet", "Chalumeau", "Chamber Organ", "Chirimía", "Chromatic Button Accordion", "Chromatic Harmonica", "Clarinet", "Claviola", "Concert Flute", "Concertina", "Conch", "Contrabass Clarinet", "Contrabass Flute", "Contrabass Recorder", "Contrabass Saxophone", "Contrabassoon", "Cornamuse", "Cornet", "Cornett", "Crumhorn", "Daegeum", "Descant Recorder", "Diatonic Accordion", "Didgeridoo", "Đing Buốt", "Đing Năm", "Ding Tac Ta", "Dizi", "Double Reed", "Duck Call", "Duduk", "Dulcian", "Dulzaina", "E-flat Clarinet", "End-blown Flute", "English Concertina", "English Flageolet", "English Horn", "Euphonium", "Fife", "Fipple Flute", "Flabiol", "Flageolet", "Flugelhorn", "Flumpet", "Flute", "Flûte D'amour", "Fourth Flute", "Free Reed", "French Horn", "Fujara", "Garklein Recorder", "Gemshorn", "German Concertina", "Gralla", "Great Bass Recorder", "Guan", "Härjedalspipa", "Harmonica", "Harmonium", "Heckelphone", "Helicon", "Hichiriki", "Hmông Flute", "Horn", "Hotchiku", "Hue Puruhau", "Hulusi", "Indian Bamboo Flutes", "Jug", "K'lông Pút", "Kagurabue", "Kaval", "Kèn Bầu", "Kèn Lá", "Keyed Brass Instruments", "Khèn Mèo", "Khene", "Khlui", "Ki Pah", "Kōauau", "Kōauau Ponga Ihu", "Kortholt", "Launeddas", "Limbe", "Low Whistle", "Mellophone", "Melodeon", "Melodica", "Mirliton", "Mouth Organ", "Musette De Cour", "Nabal", "Nadaswaram", "Nagak", "Nai", "Natural Brass Instruments", "Natural Horn", "Ney", "Nguru", "Nohkan", "Northumbrian Pipes", "Nose Flute", "Nose Whistle", "Oboe", "Oboe D'amore", "Oboe Da Caccia", "Ocarina", "Ophicleide", "Organ", "Pan Flute", "Pang Gu Ly Hu Hmông", "Pi", "Pi Nai", "Pí Thiu", "Piano Accordion", "Piccolo", "Piccolo Oboe", "Piccolo Trumpet", "Pipe Organ", "Piri", "Pocket Trumpet", "Poi Āwhiowhio", "Porotiti", "Pōrutu", "Post Horn", "Practice Chanter", "Pūkaea", "Pūmotomoto", "Pūpakapaka", "Pūtātara", "Pūtōrino", "Quena", "Rauschpfeife", "Recorder", "Reed Organ", "Reeds", "Rehu", "Rondador", "Ryuteki", "Sackbut", "Saduk", "Samba Whistle", "Sáo Meò", "Saó Ôi Flute", "Sáo Trúc", "Sarrusophone", "Saxophone", "Schwyzerörgeli", "Scottish Smallpipes", "Serpent", "Shakuhachi", "Shawm", "Shehnai", "Sheng", "Shinobue", "Sho", "Shofar", "Shruti Box", "Siku", "Single Reed", "Slide Brass Instruments", "Slide Whistle", "Sopilka", "Sopranino Recorder", "Sopranino Saxophone", "Soprano Clarinet", "Soprano Flute", "soprano Recorder", "Soprano Saxophone", "Sousaphone", "Spilåpipa", "Subcontrabass Recorder", "Suling", "Suona", "Swedish Bagpipes", "Syrinx", "Taepyeongso", "Taragot", "Tarota", "Tenor Horn", "Tenor Recorder", "Tenor Saxophone", "Tenor Trombone", "Tenora", "Theatre Organ", "Three-hole Pipe", "Tible", "Tiêu", "Tin Whistle", "Tonette", "Tràm Plè", "Trắng Jâu", "Trắng Lu", "Transverse Flute", "Treble Flute", "Treble Recorder", "Trikiti", "Trombone", "Tromboon", "Trumpet", "Tuba", "Tubax", "Txistu", "Uilleann Pipes", "Valve Trombone", "Valved Brass Instruments", "Venu", "Vessel Flute", "Vibrandoneon", "Vienna Horn", "Wagner Tuba", "Whistle", "Willow Flute", "Wind Instruments", "Woodwind", "Wot", "Xaphoon", "Xiao", "Xun", "Żaqq", "Zhaleika", "Zurna"],

		'string' => ["12 String Guitar", "17-string Koto", "Acoustic Bass Guitar", "Acoustic Fretless Guitar", "Acoustic Guitar", "Aeolian Harp", "Ajaeng", "Alto Violin", "Appalachian Dulcimer", "Archlute", "Archtop Guitar", "Arpeggione", "Autoharp", "Baglama", "Bajo Sexto", "Balalaika", "Baltic Psalteries", "Bandora", "Bandura", "Bandura", "Bandurria", "Banhu", "Banjitar", "Banjo", "Banjo-ukulele", "Banjolin", "Barbat", "Baritone Guitar", "Baryton", "Bass Guitar", "Berda", "Berimbau", "Bisernica", "Biwa", "Blaster Beam", "Bolon", "Bouzar", "Bouzouki", "Bowed Piano", "Bowed Psaltery", "Bowed String Instruments", "Brač", "Bugarija", "Bulbul Tarang", "Buzuq", "Cavaquinho", "Cello", "Čelo", "Chakhe", "Chanzy", "Chapman Stick", "Charango", "Chikuzen Biwa", "Chitra Veena", "Citole", "Cittern", "Cizhonghu", "Clàrsach", "Classical Guitar", "Classical Kemençe", "Clavichord", "Clavinet", "Cò Ke", "Concert Harp", "Craviola", "Cretan Lyra", "Crwth", "Cuatro", "Cümbüş", "Cymbalum", "Đàn Bầu", "Đàn Nguyệt", "Đàn Nhị", "Đàn Tam", "Đàn Tam Thập Lục", "Đàn Tranh", "Đàn Tứ", "Đàn Tứ Dây", "Đàn Tỳ Bà", "Daruan", "Diddley Bow", "Dilruba", "Diyingehu", "Djoza", "Dobro", "Dolceola", "Dombra", "Domra", "Donso Ngɔni", "Doshpuluur", "Double Bass", "Dramyin", "Dulce Melos", "Dutar", "Duxianqin", "Ektara", "Electric Bass Guitar", "Electric Cello", "Electric Fretless Guitar", "Electric Grand Piano", "Electric Guitar", "Electric Harp", "Electric Lap Steel Guitar", "Electric Sitar", "Electric Upright Bass", "Electric Viola", "Electric Violin", "Erhu", "Esraj", "Fiddle", "Five-string Banjo", "Folk Harp", "Fortepiano", "Four-string Banjo", "Fretless Bass", "Gadulka", "Gaohu", "Gayageum", "Gehu", "Geomungo", "German Harp", "Ģīga", "Gittern", "Gouzouki", "Grand Piano", "Greek Baglama", "Gudok", "Guitalele", "Guitar", "Guitarrón Chileno", "Guitarrón Mexicano", "Guitars", "Gumbri", "Guqin", "Gusli", "Gut Guitar", "Guzheng", "Haegeum", "Hammered Dulcimer", "Hardingfele", "Harp", "Harp Guitar", "Harpsichord", "Hawaiian Guitar", "Heike Biwa", "Huqin", "Hurdy Gurdy", "Igil", "Irish Bouzouki", "Irish Harp", "Jeli Ngɔni", "Jing'erhu", "Jinghu", "Jouhikko", "Kamalen Ngɔni", "Kamancheh", "Kanklės", "Kannel", "Kantele", "Kanun", "Kemençe Of The Black Sea", "Kemenche", "Khim", "Kinnor", "Kithara", "Kokyu", "Komuz", "Kora", "Koto", "Krar", "Langeleik", "Laouto", "Lap Steel Guitar", "Laúd", "Lautenwerck", "Lavta", "Lirone", "Liuqin", "Lute", "Luthéal", "Lyre", "Mandocello", "Mandoguitar", "Mandola", "Mandolin", "Mandolute", "Marxophone", "Matouqin", "Mexican Vihuela", "Minipiano", "Morin Khuur", "Musical Bow", "Ngɔni", "Nyatiti", "Nyckelharpa", "Nylon Guitar", "Octave Mandolin", "Oktawka", "Orpharion", "Orphica", "Oud", "Paraguayan Harp", "Pedal Piano", "Pedal Steel Guitar", "Piano", "Piano Spinet", "Pipa", "Plucked String Instruments", "Portuguese Guitar", "Prepared Piano", "Psaltery", "Ravanahatha", "Rebab", "Rebec", "Resonator Guitar", "Rhodes Piano", "Ruan", "Rudra Veena", "Samica", "Sanshin", "Santoor", "Santur", "Sanxian", "Sarangi", "Saraswati Veena", "Šargija", "Sarod", "Satsuma Biwa", "Saw Duang", "Saw Sam Sai", "Saw U", "Saz", "Setar", "Shamisen", "Shichepshin", "Shudraga", "Sitar", "Slide Guitar", "Soprano Violin", "Spanish Acoustic Guitar", "Spinet", "Spinettone", "Steel Guitar", "Steel-string Guitar", "Strings", "Stroh Violin", "Struck String Instruments", "Suka", "Sursingar", "Swarmandal", "Table Steel Guitar", "Tack Piano", "Taishogoto", "Talharpa", "Tambura", "Tanbur", "Tangent Piano", "Tanpura", "Tar", "Tenor Banjo", "Tenor Guitar", "Tenor Violin", "Theorbo", "Tiple", "Tololoche", "Tonkori", "Topshuur", "Toy Piano", "Treble Violin", "Tres", "Tromba Marina", "Tumbi", "Turkish Baglama", "Tzoura", "Ukeke", "Ukulele", "Upright Piano", "Ütőgardon", "Valiha", "Vichitra Veena", "Vielle", "Vietnamese Guitar", "Vihuela", "Viola", "Viola Caipira", "Viola D'amore", "Viola Da Gamba", "Viola Organista", "Violin", "Violino Piccolo", "Violins", "Viololyra", "Violoncello Piccolo", "Violone", "Violotta", "Virginal", "Warr Guitar", "Washtub Bass", "Wire-strung Harp", "Xalam", "Yangqin", "Yatga", "Yaylı Tanbur", "Yehu", "Yueqin", "Zhonghu", "Zhongruan", "Zither"],

		'percussion' => ["Afoxé", "Afuche", "Agogô", "Akete", "Alfaia", "Amadinda", "Aman Khuur", "Ankle Rattlers", "Anvil", "Ashiko", "Atabaque", "Atarigane", "Balafon", "Bamboo Angklung", "Bangu", "Barrel Drum", "Bass Drum", "Batá Drum", "Bell Tree", "Bells", "Bendir", "Bicycle Bell", "Bin-sasara", "Bodhrán", "Body Percussion", "Bones", "Bongos", "Boobam", "Brushes", "Buk", "Cabasa", "Cajón", "Calabash", "Carillon", "Castanets", "Caxixi", "Celesta", "Çevgen", "Chacha", "Chande", "Chap", "Chau Gong", "Chime Bar", "Ching", "Chập Chõa", "Claves", "Congas", "Cowbell", "Cristal Baschet", "Crotales", "Cuíca", "Cylindrical Drum", "Cymbals", "Daf", "Daire", "Daluo", "Darbuka", "Davul", "Dhol", "Dholak", "Djembe", "Dohol", "Doyra", "Drums", "Drumset", "Duggi", "Dulcitone", "Dunun", "Electronic Drum Set", "Finger Cymbals", "Finger Snaps", "Foot Percussion", "Frame Drum", "Friction Drum", "Friction Idiophone", "Frottoir", "Gankogui", "Ganzá", "Garifuna Drum", "Ghatam", "Glass Harp", "Glockenspiel", "Goblet Drum", "Gong", "Gong Bass Drum", "Gongs", "Gramorimba", "Güiro", "Handbells", "Handclaps", "Hang", "Hi-hat", "Hourglass Drum", "Hue Puruwai", "Idiophone", "Janggu", "Jew's Harp", "Jing", "Kanjira", "Kartal", "Kettle Drum", "Khong Wong", "Khong Wong Lek", "Khong Wong Yai", "Khulsan Khuur", "Kkwaenggwari", "Klong Khaek", "Klong Song Na", "Klong That", "Klong Yao", "Kös", "Kotsuzumi", "Krakebs", "Kudüm", "Lamellophone", "Lithophone", "Madal", "Maddale", "Maracas", "Marimba", "Marímbula", "Mark Tree", "Mbira", "Mendoza", "Metal Angklung", "Metallophone", "Morsing", "Mridangam", "Mukkuri", "Nagadou-daiko", "Não Bạt", "Naobo", "Ocean Drum", "Octoban", "Ōtsuzumi", "Pahū", "Pahū Pounamu", "Pakhavaj", "Pākuru", "Pātē", "Percussion", "Phách", "Pkhachich", "Poi", "Primero", "Qilaut", "Quijada", "Quinto", "Rainstick", "Rammana", "Ranat Ek", "Ranat Kaeo", "Ranat Thum", "Ratchet", "Rattle", "Reco-reco", "Repinique", "Rhythm Sticks", "Riq", "Rōria", "Rototom", "Sabar", "Sapek Clappers", "Saron", "Segunda", "Sênh Tiền", "Shakers", "Shekere", "Shime-daiko", "Singing Bowl", "Sistrum", "Slit Drum", "Snare Drum", "Song Loan", "Spoons", "Steelpan", "Struck Idiophone", "Surdo", "T'rưng", "Tabla", "Tabor", "Taiko", "Talking Drum", "Tamborim", "Tambourine", "Tanbou Ka", "Tap Dancing", "Taphon", "Tar", "Tef", "Temple Blocks", "Temür Khuur", "Thavil", "Thon", "Ti Bwa", "Tibetan Water Drum", "Timbales", "Timpani", "Tinya", "Tōkere", "Tom-tom", "Triangle", "Trống Bông", "Tubular Bells", "Tubulum", "Tumutumu", "Tuned Percussion", "Txalaparta", "Typewriter", "Udu", "Vibraphone", "Vibraslap", "Washboard", "Waterphone", "Whip", "Wind Chime", "Wood Block", "Wooden Fish", "Wurlitzer Electric Piano", "Xiaoluo", "Xylophone", "Xylorimba", "Yonggo", "Zabumba", "Żafżafa", "Zarb", "Zill"],

		'electronic' => ["Analog Synthesizer", "Bass Pedals", "Bass Synthesizer", "Chamberlin", "Clavioline", "Continuum", "Denis D'or", "Disk Drive", "Drum Machine", "Dubreq Stylophone", "Ebow", "Electronic Instruments", "Electronic Organ", "Elektronium", "EWI", "Farfisa", "Floppy Disk Drive", "Guitar Synthesizer", "Guitaret", "Guitorgan", "Hammond Organ", "Hard Disk Drive", "Keyboard", "Keyboard Bass", "Keytar", "Laser Harp", "Lyricon", "Marimba Lumina", "Mellotron", "Minimoog", "Moog", "Omnichord", "Ondes Martenot", "Ondioline", "Pianet", "Reactable", "Sampler", "Synclavier", "Synthesizer", "Telharmonium", "Theremin", "Trautonium", "Tubon", "Video Game Console", "Vocoder", "Voice Synthesizer", "Wavedrum", "Wind Synthesizer"],
	];

	/**
	 * Generate a random instrument name
	 *
	 * @return string
	 */
	public function instrument($family = null)
	{
		return static::randomElement($this->allInstruments());
	}

    /**
     * Generate a random common instrument name
     *
     * @return string
     */
    public function commonInstrument()
    {
        return static::randomElement(static::$instruments['common']);
    }

	/**
	 * Generate a random wind instrument name
	 *
	 * @return string
	 */
	public function windInstrument()
	{
		return static::randomElement(static::$instruments['wind']);
	}

	/**
	 * Generate a random string instrument name
	 *
	 * @return string
	 */
	public function stringInstrument()
	{
		return static::randomElement(static::$instruments['string']);
	}

	/**
	 * Generate a random percussion instrument name
	 *
	 * @return string
	 */
	public function percussionInstrument()
	{
		return static::randomElement(static::$instruments['percussion']);
	}

	/**
	 * Generate a random electronic instrument name
	 *
	 * @return string
	 */
	public function electronicInstrument()
	{
		return static::randomElement(static::$instruments['electronic']);
	}

	/**
	 * Merge all instruments into a single array
	 *
	 * @return array
	 */
	protected function allInstruments()
	{
		$all = [];

		array_walk_recursive(static::$instruments, function ($group) use (&$all) {
			$all[] = $group;
		});

		return $all;
	}
}
