<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('quotes')->insert([
        'character_id' => 1,
        'quote'       => 'If I had a gun with two bullets and I was in a room with Hitler, Bin Laden, and Toby, I would shoot Toby twice.',
      ]);
      DB::table('quotes')->insert([
        'character_id' => 1,
        'quote'       => "Occasionally, I’ll hit somebody with my car. So sue me.",
      ]);
      DB::table('quotes')->insert([
        'character_id' => 1,
        'quote'       => 'I. Declare. Bankruptcy!',
      ]);
      DB::table('quotes')->insert([
        'character_id' => 1,
        'quote'       => 'And I knew exactly what to do. But in a much more real sense, I had no idea what to do.',
      ]);
      DB::table('quotes')->insert([
        'character_id' => 1,
        'quote'       => "I feel like all my kids grew up, and then they married each other. It’s every parent’s dream.",
      ]);
      DB::table('quotes')->insert([
        'character_id' => 1,
        'quote'       => 'Sometimes I’ll start a sentence, and I don’t even know where it’s going. I just hope I find it along the way.',
      ]);
      DB::table('quotes')->insert([
        'character_id' => 1,
        'quote'       => "There are certain things a boss does not share with his employees. His salary, that would depress them. His bed, it--- And I am not going to tell them that I'll be reading their e-mails"
      ]);

      DB::table('quotes')->insert([
        'character_id' => 2,
        'quote'       => "Whenever I'm about to do something, I think, 'Would an idiot do that?' And if they would, I do not do that thing."
      ]);
      DB::table('quotes')->insert([
        'character_id' => 2,
        'quote'       => "It has to be official, and it has to be urine"
      ]);
      DB::table('quotes')->insert([
        'character_id' => 2,
        'quote'       => "I have been Michael's #2 guy for about 5 years. And we make a great team. We're like one of those classic famous teams. He's like Mozart, and I'm like Mozart's friend. No. I'm like Butch Cassidy, and Michael is like Mozart. You try and hurt Mozart; you're going to get a bullet in your head courtesy of Butch Cassidy."
      ]);
      DB::table('quotes')->insert([
        'character_id' => 2,
        'quote'       => "I.D. badges are long overdue. Security in this office park is a joke. Last year, I came to work with my spud gun in a duffel bag. I sat at my desk all day, with a rifle that shoots potatoes at 60 pounds per square inch. Can you imagine if I was deranged?"
      ]);
      
      
      
      DB::table('quotes')->insert([
        'character_id' => 3,
        'quote'       => "Once every hour, someone is involved in an internet scam. That man is Michael Scott."
      ]);
      DB::table('quotes')->insert([
        'character_id' => 3,
        'quote'       => "It's performance review day, company-wide. Last year, my performance review started with Michael asking me what my hopes and dreams were, and it ended with him telling me he could bench-press 190 pounds. So, I don't really know what to expect."
      ]);
      DB::table('quotes')->insert([
        'character_id' => 3,
        'quote'       => "There’s a lot of beauty in ordinary things. Isn’t that kind of the point?"
      ]);


      DB::table('quotes')->insert([
        'character_id' => 4,
        'quote'       => "Bears, Beets, Battlestar Galactica."
      ]);      DB::table('quotes')->insert([
        'character_id' => 4,
        'quote'       => "It's true. I'm having a party. I've got three cases of imported beer, a karaoke machine, and I didn't invite Michael. So three ingredients for a great party. And it's nothing personal, I just think that if he were there, people wouldn't be able to relax, and you know, have fun, and my roommate wants to meet everybody. Because I'm pretty sure he thinks that I'm making Dwight up. [sighs] He is very real."
      ]);
      
      
      DB::table('quotes')->insert([
        'character_id' => 5,
        'quote'       => "I wish there was a way to know you’re in the good old days, before you’ve actually left them."
      ]);
      DB::table('quotes')->insert([
        'character_id' => 5,
        'quote'       => "You can't let a girl feel good about herself. It will backfire on you. Every compliment has to be backhanded. 'Oh I like your dress, but I'd like it more if you had prettier hair."
      ]);
      DB::table('quotes')->insert([
        'character_id' => 5,
        'quote'       => "I'll be the Number Two guy here in Scranton in six weeks. How? Name repetition, personality mirroring, and never breaking off a handshake. I'm always thinking one step ahead. Like a carpenter that makes stairs."
      ]);
      DB::table('quotes')->insert([
        'character_id' => 5,
        'quote'       => "Sorry I annoyed you with my friendship."
      ]);
    }
}
