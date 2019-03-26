<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Product::create([
          'name' => 'Gameboy Classic',
          'slug' => 'gameboy-classic',
          'details' => 'Released 1989',
          'description' => 'Everyone loves Game Boy. Packing a huge amount of power into a tiny package, this little console proved a revolution in videogaming when it launched in Japan in 1989. Since then, this pocket-sized system has sold over 100 million units, giving gamers all over the world the freedom to play their favourite games - including Tetris, Super Mario and Pokémon - no matter where they are.',
          'cpu' => 'Custom 8-Bit CMOS, 2.2Mhz clock speed',
          'memory' => '64-Kbit static RAM',
          'screen' => 'STN type dot matrix LCD, 160 x 144 pixels, 4 shades of grey',
          'size' => '90mm x 148mm x 32mm',
          'weight' => 'Approx. 300g with batteries',
          'power' => '4 x AA batteries',
          'battery life' => 'Approx. 15 hours'
      ]);

      Product::create([
          'name' => 'Gameboy Color',
          'slug' => 'gameboy-color',
          'details' => 'Released 1998',
          'description' => "Game Boy Color is part of the range of portable powerhouses that revolutionised the way the world plays games. Over thirteen years, Game Boy has become the planet's most loved handheld with over 100 million units sold. Game Boy Color brings a ravishing rainbow of over 32,000 possible colours to the bright 44 x 39mm screen, along with twice the processing power of its monochrome sibling.",
          'cpu' => '8-bit Z80',
          'memory' => '32 Kbyte + 96 Kbyte VRAM (in CPU), 256 Kbyte WRAM (external of CPU)',
          'screen' => 'Sharp colour LCD screen, 44 x 39mm size, 160x140 resolution, 32,768 possible colours, 56 simultaneous colours',
          'size' => 'Width 75mm, Depth 27mm, Height 133mm',
          'weight' => '138g',
          'power' => '2 AA batteries',
          'battery life' => '10 hours'
      ]);

      Product::create([
          'name' => 'Gameboy Advance SP',
          'slug' => 'gameboy-advance-sp',
          'details' => 'Released 2003',
          'description' => "We've taken everything you love about Game Boy Advance, dreamed up a set of irresistible new features - a built-in screen light, a flip-top screen, a rechargeable battery - and squeezed it all into one sleek handheld system. Now you can enjoy all Game Boy and Game Boy Advance games in real style.",
          'cpu' => '32-Bit ARM with embedded memory',
          'memory' => '32 Kbyte + 96 Kbyte VRAM (in CPU), 256 Kbyte WRAM (external of CPU)',
          'screen' => '2.9" TFT screen w/ integrated screen light, 240x160 resolution, 40.8 x 61.2mm size, 32,768 possible colours, 511 simultaneous colours (char mode), 32,768 simultaneous colours (bitmap mode.)',
          'size' => 'Width 82mm / Depth 24.3mm / Height 84.6mm',
          'weight' => '143g',
          'power' => 'Built in rechargeable Lithium Ion battery.',
          'battery life' => '10 hours continuous game play (18 hours with light off) with approximately 3 hours recharging time.'
      ]);

      Product::create([
          'name' => 'Gameboy Micro',
          'slug' => 'gameboy-micro',
          'details' => 'Released 2005',
          'description' => "We've taken everything you love about Game Boy Advance and made it even smaller. With a crisp backlit screen, four stylish hardware designs and more than 500 games to choose from, Game Boy Micro puts power gaming in your pocket and makes it look better than ever.",
          'cpu' => '32 bit RISC-CPU + 8 bit CISC-CPU',
          'memory' => '2 Kbyte WRAM + 96 Kbyte VRAM (internal) 256 Kbyte WRAM (external)',
          'screen' => 'Size: 2 inch (28.32 mm x 42.48 mm)/ Resolution: 240 x 160 Pixel/ Refresh Rate: 60Hz',
          'size' => '101 x 50 x 17.2 mm',
          'weight' => 'Approx. 80g (incl. battery)',
          'power' => '5.2 V / 320mA',
          'battery life' => 'Approx. 6 - 10 hrs playtime / Approx. 2.5 hrs charging time'
      ]);
    }
}
