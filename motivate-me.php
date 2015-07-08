<?php
/*
Plugin Name: Motivate Me
Plugin URI: http://wordpress.org/extend/plugins/hello-dolly/
Description: This plugin is used to show motivational quotes just before the Blogger logs into his/her Blog. It also shows Blogging advices and suggestions to the user.
Author: YourFriend
Version: 1.0
Author URI: http://geekfellows.com
*/

function get_quote() {
	/** These are the input lines to Motivate Me */
	$quote = "It always seems impossible till it's DONE
Failure is just a first step towards Success
Simple reading is damn hard writing
Proofreading is a process that turns cloths into clothes
Your blog is not just a blog, it is your identity which represents you in front of the World.
Nobody got time, so you better give your readers a really damn good reason to stay on your Blog.
Write short sentences, they are easy to understand and won't bore out the reader.
Readers are selfish as much as you are. But they are one step ahead of you, so you better treat them as your boss.
A blog with no readers, is just like a personal diary which is read only by it's writer. Never let it happen to your blog.
Expert bloggers give you advices, but I give you motivation and with that, you can achieve anything you want.
Never put boundaries around you. Because I know you can achieve whatever you want.
I write once and proofread 10 times, you better do it too. Maybe more than 10 times.
Title to article is just like packing to a product. You better make it eye-catching.
Title brings readers to your blog and your content keeps them there.
People told I can't make a plugin but I did. They said no one will use it, but you proved them wrong. Thanks to You :)
You will write once and it will be read 1000 times by thousands of people around the World. So if you are writing, you are not wasting time at all
Lets log in and rock the World
No matter what you write, it should be worth reading
Promote other people and they will promote you
You are just one step away from entering the amazing world of Blogging.
You get a lot of spam comments? It means you are not the only one who knows about your blog.
The more spam you get, it means the more places your blog has reached.
Lets log in and tell the what you got
They not here to read novels or newspapers. So you better use graphics and proper formatting in your posts
Nobody is reading your blog? Maybe because you are not promoting it very well. Remember, promotion is more important than creating content.
Write High Quality content or don't write at all
People won't comment, they won't share, the won't subscribe unless you ask them to do. So go ahead, they just consumed your content now it's time to get your money.
Don't write on for the sake of writing, because it won't make any difference unless you write something useful
I write for humans beings, spiders will come themselves.
With one click, you can send your article to the whole World. Isn't it amazing?
I write and people read it even when I am sleeping. Because there are different timezones around the earth. Feel the power of blogging.
Don't know what to write? Then go read, read, read and read.
Do you remember the line of James Bond? 'I don't stop when I get tired, I stop when I am done'.
To write a page, you need to read 100 pages.
Are you demotivated? Recall why you created this Blog, ah there you go are you motivated now?
I watch movies, I read novels, I go out, I eat food, I drink, I hangout, I sleep and I wake up only to write something for my readers.
Writing is the only way to talk without getting interrupted
There is one golden rule for Blogging. Which is KISS, keep it  so simple.
People are here for great content and only you can provide it to them. So go ahead, they are waiting for you.
What was the last movie you seen? And what was the best line, scene, thing in it?
Even a child with chalk in hand can write, only proofreading and proper formatting makes you a Blogger
Defeat is not that when you get down, defeat is that when you refuse to get up
If things don't go right, go left
Nobody will come to your blog unless you put something on it
You can't write about everything, it's better to write about specific things and easier to target specific people.
Put small goals and try to achieve them. Such as getting a comment, receiving more than 100 views in a day etc.
Use images instead of forcing your reads to read hundreds of lines.
The word impossible says itself 'I M Possible'
The more you press me, the harder I will bounce back
You cannot break me, you can only make me stronger";

	// Here we split it into lines
	$quote = explode( "\n", $quote );

	// And then randomly choose a line
	return wptexturize( $quote[ mt_rand( 0, count( $quote ) - 1 ) ] );
}

// This just echoes the chosen line, we'll position it later
function motivate_me() {
	$chosen = get_quote();
	echo "<p id='quote'>$chosen</p>";
}

// Now we set that function up to execute when the login_form action is called
add_action( 'login_form', 'motivate_me' );

// We need some CSS to position the paragraph
function motivate_css() {
	

	echo "
	<style type='text/css'>
	#quote {
			
		margin: 0;
		padding-bottom:2px;
		font-size: 11px;
                color:green;
		text-align:center;
		
	}
	</style>
	";
}

add_action( 'login_form', 'motivate_css' );

?>