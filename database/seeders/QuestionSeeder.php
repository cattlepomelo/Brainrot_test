<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     *
     *
     * @return void
     */
    public function run()
    {
        // jautājums 1
        Question::create([
            'question_text' => 'Kurš ir tralalero tralala?',
            'image1' => 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AA1D36j7.img?w=768&h=512&m=6',
            'image2' => 'https://media.printables.com/media/prints/299f1480-f1c9-48c8-a8f1-ced1cff9c26a/images/9465696_53001ea8-a393-4fbb-92c8-f98e2d6d1d42_61177c37-9af9-44b5-a142-3a90d994819e/thumbs/cover/800x800/jpg/lirili-larila.jpg',
            'image3' => 'https://i1.sndcdn.com/artworks-NKn7SdyyvKRS2lWl-NeFOKg-t1080x1080.png',
            'image4' => 'https://media1.tenor.com/m/C3C6hoyZcHoAAAAd/fruli-frula.gif',
            'correct_answer' => 1,
        ]);

        //jautājums 2
        Question::create([
            'question_text' => 'Kurš ir glorbo frutto drillo?',
            'image1' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRt1Bt_LZfo14V25CoFEBuiijLxAaZMhpDzRA&s',
            'image2' => 'https://cdn-0001.qstv.on.epicgames.com/DeWFZjGciBtKpknWZf/image/landscape_comp.jpeg',
            'image3' => 'https://i.ytimg.com/vi/-ytQ9naZsRw/mqdefault.jpg',
            'image4' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0ENm0RJt57Je4pXjKHxkdHsSt30QcEqGeqA&s',
            'correct_answer' => 4,
        ]);

        //jautājums 3
        Question::create([
            'question_text' => 'Kurš ir Tung tung tung tung tung tung tung Sahur?',
            'image1' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7E2OYcxg5-cRv04CT0mIRUnFatU-LWVj87A&s',
            'image2' => 'https://i1.sndcdn.com/artworks-XT844CBcyKoMrH6Y-xfjwqg-t240x240.jpg',
            'image3' => 'https://i1.sndcdn.com/artworks-NKn7SdyyvKRS2lWl-NeFOKg-t1080x1080.png',
            'image4' => 'https://i9.ytimg.com/s_p/OLAK5uy_nNvc2rnwSPpW0RrYG9mCkhuq0OW5mSL0s/sddefault.jpg?sqp=CJCIrMAGir7X7AMICNCArL0GEAE=&rs=AOn4CLDfS6Z7ef5ByRhf82qAw6cZHx5Q6w&v=1739259984',
            'correct_answer' => 3,
        ]);
    }
}