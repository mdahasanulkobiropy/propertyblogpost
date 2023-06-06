<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogPost::insert([
            'title' => 'What to Expect When Working with an Interior Designer',
            'image' => '1.jpg',
            'middle_title' => 'Have realistic expectations',
            'middle_des1' => 'Most designers will tell you that, as much as we all love to watch home design shows, their prevalence has done them a bit of a disservice. Thanks to TV magic, the designers on those shows pull off projects with tight deadlines and shoestring budgets that would never fly in the real world.',
            'middle_des2' => 'Of course, every project is different. The best way to get a handle on an anticipated budget and duration is by asking potential designers for this information upfront. Don’t be afraid to reach out to more than one to get a realistic picture of what to expect.',
            'middle_url' => 'https://www.youtube.com/watch?v=4Wee4LASqvE',
            'next_middle_title' => 'Take the time to find the right fit',
            'next_middle_des1' => 'Not all designers are created equal. Like all of us, each designer has his or her own unique personal tastes, quirks and business practices. To make sure your project is a success, it’s important that you and your designer are on the same page with a lot of these details. You may need to interview a few before you find someone who’s the right fit.',
            'next_middle_des2' => '"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."',
            'next_middle_des3' => 'In the design world, this interview is called a consultation. It can be an in-person meeting or held over the phone, and it can be paid or unpaid. You can use this time to ask to see samples of the designer’s work, learn more about their process, and ask about business practices, such as their preferred methods for communication and billing.',
            'next_middle_des4' => 'You can also use this time to let the designer get to know you. Feel free to bring in a few photos or items you intend to use for design inspiration. Let the designer know about your specific quirks and personal preferences. By the end of the meeting, you should have a good sense of whether the two of you will work well together.',
            'final_title' => 'Final thoughts',
            'final_des' => 'For those who have never hired an interior designer before, the idea of doing so can feel out of reach, but it doesn’t need to be. We’ve created a first-timer’s guide to working with an interior designer to help you take the plunge. Use the advice in this post to make an informed decision as to whether hiring professional help is the right choice for you.',
            'blogcategory_id' => '1',
            'blogtag_id' => '1'

        ]);
        BlogPost::insert([
            'title' => 'What to Expect When Working with an Interior Designer',
            'image' => '2.jpg',
            'middle_title' => 'Have realistic expectations',
            'middle_des1' => 'Most designers will tell you that, as much as we all love to watch home design shows, their prevalence has done them a bit of a disservice. Thanks to TV magic, the designers on those shows pull off projects with tight deadlines and shoestring budgets that would never fly in the real world.',
            'middle_des2' => 'Of course, every project is different. The best way to get a handle on an anticipated budget and duration is by asking potential designers for this information upfront. Don’t be afraid to reach out to more than one to get a realistic picture of what to expect.',
            'middle_url' => 'https://www.youtube.com/watch?v=4Wee4LASqvE',
            'next_middle_title' => 'Take the time to find the right fit',
            'next_middle_des1' => 'Not all designers are created equal. Like all of us, each designer has his or her own unique personal tastes, quirks and business practices. To make sure your project is a success, it’s important that you and your designer are on the same page with a lot of these details. You may need to interview a few before you find someone who’s the right fit.',
            'next_middle_des2' => '"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."',
            'next_middle_des3' => 'In the design world, this interview is called a consultation. It can be an in-person meeting or held over the phone, and it can be paid or unpaid. You can use this time to ask to see samples of the designer’s work, learn more about their process, and ask about business practices, such as their preferred methods for communication and billing.',
            'next_middle_des4' => 'You can also use this time to let the designer get to know you. Feel free to bring in a few photos or items you intend to use for design inspiration. Let the designer know about your specific quirks and personal preferences. By the end of the meeting, you should have a good sense of whether the two of you will work well together.',
            'final_title' => 'Final thoughts',
            'final_des' => 'For those who have never hired an interior designer before, the idea of doing so can feel out of reach, but it doesn’t need to be. We’ve created a first-timer’s guide to working with an interior designer to help you take the plunge. Use the advice in this post to make an informed decision as to whether hiring professional help is the right choice for you.',
            'blogcategory_id' => '2',
            'blogtag_id' => '2'

        ]);
        BlogPost::insert([
            'title' => 'What to Expect When Working with an Interior Designer',
            'image' => '3.jpg',
            'middle_title' => 'Have realistic expectations',
            'middle_des1' => 'Most designers will tell you that, as much as we all love to watch home design shows, their prevalence has done them a bit of a disservice. Thanks to TV magic, the designers on those shows pull off projects with tight deadlines and shoestring budgets that would never fly in the real world.',
            'middle_des2' => 'Of course, every project is different. The best way to get a handle on an anticipated budget and duration is by asking potential designers for this information upfront. Don’t be afraid to reach out to more than one to get a realistic picture of what to expect.',
            'middle_url' => 'https://www.youtube.com/watch?v=4Wee4LASqvE',
            'next_middle_title' => 'Take the time to find the right fit',
            'next_middle_des1' => 'Not all designers are created equal. Like all of us, each designer has his or her own unique personal tastes, quirks and business practices. To make sure your project is a success, it’s important that you and your designer are on the same page with a lot of these details. You may need to interview a few before you find someone who’s the right fit.',
            'next_middle_des2' => '"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."',
            'next_middle_des3' => 'In the design world, this interview is called a consultation. It can be an in-person meeting or held over the phone, and it can be paid or unpaid. You can use this time to ask to see samples of the designer’s work, learn more about their process, and ask about business practices, such as their preferred methods for communication and billing.',
            'next_middle_des4' => 'You can also use this time to let the designer get to know you. Feel free to bring in a few photos or items you intend to use for design inspiration. Let the designer know about your specific quirks and personal preferences. By the end of the meeting, you should have a good sense of whether the two of you will work well together.',
            'final_title' => 'Final thoughts',
            'final_des' => 'For those who have never hired an interior designer before, the idea of doing so can feel out of reach, but it doesn’t need to be. We’ve created a first-timer’s guide to working with an interior designer to help you take the plunge. Use the advice in this post to make an informed decision as to whether hiring professional help is the right choice for you.',
            'blogcategory_id' => '3',
            'blogtag_id' => '3'

        ]);
        BlogPost::insert([
            'title' => 'What to Expect When Working with an Interior Designer',
            'image' => '4.jpg',
            'middle_title' => 'Have realistic expectations',
            'middle_des1' => 'Most designers will tell you that, as much as we all love to watch home design shows, their prevalence has done them a bit of a disservice. Thanks to TV magic, the designers on those shows pull off projects with tight deadlines and shoestring budgets that would never fly in the real world.',
            'middle_des2' => 'Of course, every project is different. The best way to get a handle on an anticipated budget and duration is by asking potential designers for this information upfront. Don’t be afraid to reach out to more than one to get a realistic picture of what to expect.',
            'middle_url' => 'https://www.youtube.com/watch?v=4Wee4LASqvE',
            'next_middle_title' => 'Take the time to find the right fit',
            'next_middle_des1' => 'Not all designers are created equal. Like all of us, each designer has his or her own unique personal tastes, quirks and business practices. To make sure your project is a success, it’s important that you and your designer are on the same page with a lot of these details. You may need to interview a few before you find someone who’s the right fit.',
            'next_middle_des2' => '"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."',
            'next_middle_des3' => 'In the design world, this interview is called a consultation. It can be an in-person meeting or held over the phone, and it can be paid or unpaid. You can use this time to ask to see samples of the designer’s work, learn more about their process, and ask about business practices, such as their preferred methods for communication and billing.',
            'next_middle_des4' => 'You can also use this time to let the designer get to know you. Feel free to bring in a few photos or items you intend to use for design inspiration. Let the designer know about your specific quirks and personal preferences. By the end of the meeting, you should have a good sense of whether the two of you will work well together.',
            'final_title' => 'Final thoughts',
            'final_des' => 'For those who have never hired an interior designer before, the idea of doing so can feel out of reach, but it doesn’t need to be. We’ve created a first-timer’s guide to working with an interior designer to help you take the plunge. Use the advice in this post to make an informed decision as to whether hiring professional help is the right choice for you.',
            'blogcategory_id' => '4',
            'blogtag_id' => '1'

        ]);
        BlogPost::insert([
            'title' => 'What to Expect When Working with an Interior Designer',
            'image' => '6.jpg',
            'middle_title' => 'Have realistic expectations',
            'middle_des1' => 'Most designers will tell you that, as much as we all love to watch home design shows, their prevalence has done them a bit of a disservice. Thanks to TV magic, the designers on those shows pull off projects with tight deadlines and shoestring budgets that would never fly in the real world.',
            'middle_des2' => 'Of course, every project is different. The best way to get a handle on an anticipated budget and duration is by asking potential designers for this information upfront. Don’t be afraid to reach out to more than one to get a realistic picture of what to expect.',
            'middle_url' => 'https://www.youtube.com/watch?v=4Wee4LASqvE',
            'next_middle_title' => 'Take the time to find the right fit',
            'next_middle_des1' => 'Not all designers are created equal. Like all of us, each designer has his or her own unique personal tastes, quirks and business practices. To make sure your project is a success, it’s important that you and your designer are on the same page with a lot of these details. You may need to interview a few before you find someone who’s the right fit.',
            'next_middle_des2' => '"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."',
            'next_middle_des3' => 'In the design world, this interview is called a consultation. It can be an in-person meeting or held over the phone, and it can be paid or unpaid. You can use this time to ask to see samples of the designer’s work, learn more about their process, and ask about business practices, such as their preferred methods for communication and billing.',
            'next_middle_des4' => 'You can also use this time to let the designer get to know you. Feel free to bring in a few photos or items you intend to use for design inspiration. Let the designer know about your specific quirks and personal preferences. By the end of the meeting, you should have a good sense of whether the two of you will work well together.',
            'final_title' => 'Final thoughts',
            'final_des' => 'For those who have never hired an interior designer before, the idea of doing so can feel out of reach, but it doesn’t need to be. We’ve created a first-timer’s guide to working with an interior designer to help you take the plunge. Use the advice in this post to make an informed decision as to whether hiring professional help is the right choice for you.',
            'blogcategory_id' => '5',
            'blogtag_id' => '2'

        ]);
        BlogPost::insert([
            'title' => 'What to Expect When Working with an Interior Designer',
            'image' => '6.jpg',
            'middle_title' => 'Have realistic expectations',
            'middle_des1' => 'Most designers will tell you that, as much as we all love to watch home design shows, their prevalence has done them a bit of a disservice. Thanks to TV magic, the designers on those shows pull off projects with tight deadlines and shoestring budgets that would never fly in the real world.',
            'middle_des2' => 'Of course, every project is different. The best way to get a handle on an anticipated budget and duration is by asking potential designers for this information upfront. Don’t be afraid to reach out to more than one to get a realistic picture of what to expect.',
            'middle_url' => 'https://www.youtube.com/watch?v=4Wee4LASqvE',
            'next_middle_title' => 'Take the time to find the right fit',
            'next_middle_des1' => 'Not all designers are created equal. Like all of us, each designer has his or her own unique personal tastes, quirks and business practices. To make sure your project is a success, it’s important that you and your designer are on the same page with a lot of these details. You may need to interview a few before you find someone who’s the right fit.',
            'next_middle_des2' => '"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."',
            'next_middle_des3' => 'In the design world, this interview is called a consultation. It can be an in-person meeting or held over the phone, and it can be paid or unpaid. You can use this time to ask to see samples of the designer’s work, learn more about their process, and ask about business practices, such as their preferred methods for communication and billing.',
            'next_middle_des4' => 'You can also use this time to let the designer get to know you. Feel free to bring in a few photos or items you intend to use for design inspiration. Let the designer know about your specific quirks and personal preferences. By the end of the meeting, you should have a good sense of whether the two of you will work well together.',
            'final_title' => 'Final thoughts',
            'final_des' => 'For those who have never hired an interior designer before, the idea of doing so can feel out of reach, but it doesn’t need to be. We’ve created a first-timer’s guide to working with an interior designer to help you take the plunge. Use the advice in this post to make an informed decision as to whether hiring professional help is the right choice for you.',
            'blogcategory_id' => '5',
            'blogtag_id' => '3'

        ]);
    }
}
