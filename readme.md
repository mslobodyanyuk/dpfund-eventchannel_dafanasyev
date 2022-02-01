Design Pattern ►[ Event Channel ] ► Lesson #3
=============================================

* ***Actions on the deployment of the project:***

- Making a new project dpfund-eventchannel_dafanasyev.loc:
																	
	sudo chmod -R 777 /var/www/DESIGN_PATTERNS/Fundamental/dpfund-eventchannel_dafanasyev.loc

	//!!!! .conf
	sudo cp /etc/apache2/sites-available/test.loc.conf /etc/apache2/sites-available/dpfund-eventchannel_dafanasyev.loc.conf
		
	sudo nano /etc/apache2/sites-available/dpfund-eventchannel_dafanasyev.loc.conf

	sudo a2ensite dpfund-eventchannel_dafanasyev.loc.conf

	sudo systemctl restart apache2

	sudo nano /etc/hosts

	cd /var/www/DESIGN_PATTERNS/Fundamental/dpfund-eventchannel_dafanasyev.loc

- Deploy project:

	`git clone << >>`
	
	`or Download`
	
	_+ Сut the contents of the folder up one level and delete the empty one._

	`composer install`
---

Dmitry Afanasyev

[Design Pattern ►[ Event Channel ] ► Lesson #3 (27:05)]( https://www.youtube.com/watch?v=xKB2OqxF_t0&list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&index=3&t=1s&ab_channel=DmitryAfanasyev )

The event channel is a fundamental design pattern that allows us to create a flexible notification system with subscriptions, blackjack and courtesans!

	composer create-project --prefer-dist laravel/laravel
	
_+ Сut the contents of the folder up one level and delete the empty one._

	php artisan make:controller FundamentalPatternsController

Error: 
_"... Permission denied"_

	sudo chmod -R 777 /var/www/DESIGN_PATTERNS/Fundamental/dpfund-eventchannel_dafanasyev.loc

Error: 
_"Target class [FundamentalPatternsController] does not exist."_
		
<https://stackoverflow.com/questions/63807930/target-class-controller-does-not-exist-laravel-8>		
		
Add route in `routes/web.php`:

```php
use App\Http\Controllers\FundamentalPatternsController;

Route::get('/', [FundamentalPatternsController::class, 'EventChannel'])->name('dump');
```

	php artisan config:cache	
	php artisan config:clear

Error:
_"Class 'Debugbar' not found"_

<https://bestofphp.com/repo/barryvdh-laravel-debugbar-php-debugging-and-profiling>

	composer require barryvdh/laravel-debugbar --dev

![screenshot of sample]( https://github.com/mslobodyanyuk/dpfund-eventchannel_dafanasyev/blob/main/public/images/firefox1.png )

[(0:45)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=45 ) In the Fundamental Design Pattern `Event Channel`, as in the previous ones, there is nothing complicated. BUT it's still complicated.
Because he is NOT the only one. It is formally referred to as the Fundamental Design Pattern. - That is, it would seem, IF you start studying Design Patterns, it would probably be logical to start with Fundamental ones.
[(1:10)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=70 ) And there are at least two more Design Patterns similar to it, similar, solve similar Tasks in slightly different ways.
These are `Observer` and `Publisher-Subscriber`.

[(1:55)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=115 ) Difficulty in interpreting this Template in materials. Somewhere they talk about it, and somewhere they explain to you, for example, the Design Pattern `Publisher-Subscriber`,
and the code is shown from the `Event Channel`. OR you read on a good site written by programmers for programmers about the `Event Channel`, BUT the code is given according to `Observer`...

[(3:45)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=225 ) And other Patterns, they belong to the Behavioral... - I would like to go more or less structured, first the Basic (- Fundamental), like a foundation, go one by one.
It belongs to the Fundamental, others to the Behavioral... The problem is in studying, in finding information, what is the `Event Channel`. Because there is a lot of conflicting information on this Pattern...

[(4:50)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=290 ) 
										
<https://ru.wikipedia.org/wiki/Канал_событий_(шаблон_проектирования)>

_"The `Event Channel` is a Fundamental Design Pattern,_
_used to create a communication channel and communicate through it through_
_events."_

[(5:10)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=310 ) That is, we have a Communication Channel and we will Transmit some information based on Events. An Event has occurred - Information has been sent through the Communication Channel.
It turns out there is an intermediary. There is the one who Gives the Event, the one who Receives the Event, that is, subscribes to them. - He will do something "of his own" when this Event occurs and there is a certain Communication Channel, which will be the Intermediary.

[(5:40)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=340 ) 
 
_"This channel provides an opportunity for different publishers to publish_
_events and subscribers, subscribing to them, receive notifications."_

[(6:15)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=375 ) Scheme, so that there is more understanding, again, NOT of the Design Pattern itself, but of its Differences from `Publisher-Subscriber` and `Observer`.

[(6:30)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=390 ) _"So, a slightly different Example..."_

IF that one was more Abstract, now this one is more definite, more concrete.

We have Store Clients, they are also Subscribers, they are also `subscribers`, we have a Store( `Event Channel` ), we have a Supplier( `Publisher` ).
Customers, they got the opportunity to Subscribe in the Store for the arrival of optimal goods. Specifically, we can Subscribe NOT to ALL products (- and maybe to ALL), BUT we complicate the Task - there is a Store,
and there are many different products in it and we have Clients who do NOT want to Subscribe to ALL products, but to certain specific

[(8:10)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=490 ) And therefore, we need the opportunity to Subscribe to Subscribers exactly to those Communication Channels that are of interest to them...

[(8:45)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=525 ) And we have Suppliers that generate these Events. They, for example, brought apples, and said about it.
The shop "looks" at those who subscribed to apples... Also with other goods.

[(9:10)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=550 ) What we get is that the Subscribers, the Clients themselves, they DO NOT know anything about the Suppliers... The same Suppliers - they DO NOT know about the Clients, who is Subscribed to them OR NOT Subscribed.

[(10:10)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=610 ) Among others, there are two Banana Suppliers and, accordingly, when Bananas "come" those who Subscribe to Bananas( Sansa, Arya ) do NOT need to Subscribe to one Supplier,
then they will let the Bananas out from the other one. They Subscribe to Bananas, they need information about Bananas, IT DOES NOT matter Who brought them. And accordingly, when the information appears, the Store will notify them. Clients know nothing about Suppliers, Suppliers know nothing about Clients.

![screenshot of sample]( https://github.com/mslobodyanyuk/dpfund-eventchannel_dafanasyev/blob/main/public/images/schema.png )

[(10:50)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=650 ) _"In the Implementation - there will be a different Example in the code. NOT about Stores. - To explain in the most different ways from different angles..."_

[(11:05)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=665 ) `FundamentalPatternsController.php`

The so-called Job( `EventChannelJob` ), NOT Laravel Job, will be responsible for ALL of this...

[(11:15)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=675 ) `EventChannelJob.php`

He will create ALL this Logic. We have an `Event Channel`( our so-called Store, from the previous Example ). In this case, it is NOT a Store, it is a specific `Event Channel`. - In this case, it's the News Channel, `$newsChannel`.
And we have three publics on Facebook OR somewhere else... The first one is `$highgardenGroup`, highgarden news, `highgarden-news`. We Create a Supplier, when Created in the constructor, we indicate that it will Send such a topic - `highgarden-news`,
And we "tell" him Who is responsible for his news channel - we pass the `$newsChannel` object to him.

```php
$newsChannel = new EventChannel();

$highgardenGroup = new Publisher('highgarden-news', $newsChannel);
```

Similarly, we have news in `$winterfellNews` and `$winterfellDaily` - also news in `interfell`, BUT some other people maintain this public...

[(12:45)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=765 ) It turns out that we have two publics that create, generate news about "winterfell". There are followers. IF looking back at the previous example - `Banana supplier1`, `Banana supplier2`.

Completely two different Essences, it’s just that one brings Bananas and the other. - It's the same here.

We have 4 Subscribers, We create them ... And now these Subscribers Subscribe to certain groups, which news are of interest to whom.

```php
$winterfellNews = new Publisher('winterfell-news', $newsChannel);
$winterfellDaily = new Publisher('winterfell-news', $newsChannel);

$sansa = new Subscriber('Sansa Stark');
$arya = new Subscriber('Arya Stark');
$cersei = new Subscriber('Cersei Lannister');
$snow = new Subscriber('John Snow');
```

`$newsChannel` - we go to the news channel and "say" what we want, `$cersey` says Subscribe to `highgarden-news`.
Also `$sansa` on `winterfell-news`.

```php
$newsChannel->subscribe('highgarden-news', $cersei);
$newsChannel->subscribe('winterfell-news', $sansa);
```

`$arya` Subscribes to both `highgarden-news` and `winterfell-news`.

```php
$newsChannel->subscribe('highgarden-news', $arya);
$newsChannel->subscribe('winterfell-news', $arya);

```

`$snow` ONLY on `winterfell-news`.

```php
$newsChannel->subscribe('winterfell-news', $snow);
```

And now the news itself is published in the groups themselves,

```php
$highgardenGroup->publish('New highgarden post');

$winterfellNews->publish('New winterfell post');
$winterfellDaily->publish('New altеrnative winterfell post');
```

The first publishes `$highgardenGroup`... And so on... Published.

```php
$highgardenGroup->publish('New highgarden post');

$winterfellNews->publish('New winterfell post');
$winterfellDaily->publish('New altеrnative winterfell post');
```

[(15:10)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=910 ) _"And we will see this in `"Messages"`"_

![screenshot of sample]( https://github.com/mslobodyanyuk/dpfund-eventchannel_dafanasyev/blob/main/public/images/firefox2.png ) 

[(15:55)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=955 ) ...When it's Posting, that's when `highgarden` Posted the `post`.

```php
$highgardenGroup->publish('New highgarden post');
```

And "says" `EventChannel`, we gave it to him. `EventChannel` "looks" that this `post` came from it with `highgarden`. He's looking at this thread, we're Posting `highgarden-news` about this topic.
It "looks" Who Subscribed, it already has a list of Subscribers, when Signing - this is the second array argument. He "looks" Who Subscribed to this topic and Sends it to ALL of these people.( - On `highgarden-news` we have Subscribed `$cersey` and `$arya` ).

```php
$newsChannel = new EventChannel();

$highgardenGroup = new Publisher('highgarden-news', $newsChannel);
```

[(16:45)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=1005 ) - And here we have this Event.

```
Info Cersei Lannister оповещен(-а) данными [New highgarden post]
Info Arya Stark оповещен(-а) данными [New highgarden post]
```

![screenshot of sample]( https://github.com/mslobodyanyuk/dpfund-eventchannel_dafanasyev/blob/main/public/images/firefox3.png )

[(17:00)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=1020 ) `[New winterfell post]` 

This notification is received by `Sansa` and `Arya`. `Arya` is signed to two bands, `Sansa` ONLY to `winterfell`. `John Snow` also got `winterfell`. `Cersey` - NOT Signed, she has NOT Received.

![screenshot of sample]( https://github.com/mslobodyanyuk/dpfund-eventchannel_dafanasyev/blob/main/public/images/firefox4.png )

[(17:35)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=1055 ) More `Sansa`, `Arya` and `John Snow` Received information about alternative news in `winterfell` that was Posted by the `$winterfellDaily` group.

![screenshot of sample]( https://github.com/mslobodyanyuk/dpfund-eventchannel_dafanasyev/blob/main/public/images/firefox5.png )

[(18:10)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=1090 ) `EventChannel.php` 

[(18:15)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=1095 ) `EventChannelInterface.php` 

IF we Create an `Event Channel`, then it must have at least two methods. 

- public function publish($topic, $data) - Publisher Notifies the Channel that ALL Subscribed to the topic `$topic` Notify with `Sdata` data. The publisher will use this `EventChannel` method, he will "speak" - we gave him an `EventChannel` when something happens to him,
it "takes" this `EventChannel`, "takes" `$topic` and "says" - for this `$topic`, this is the data `$data` AND Sends.

[(18:50)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=1130 ) `Subscription`.

 To enable the Subscriber to Subscribe.

- public function subscribe($topic, SubscriberInterface $subscriber)

Subscriber "says" this is our topic, this is `$topic` And I want to Subscribe. - Subscribers also have their own Interface, `SubscriberInterface.php`

[(19:10)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=1150 ) `EventChannel.php` 

We have an array of topics that we can subscribe to.

- private $topics = [];

And Implementation of 2 methods.

- public function subscribe($topic, SubscriberInterface $subscriber) - Subscription. To the array of our topics with the key `$topic` Add `$subscriber` - Added And immediately inform the `Debugbar` that such and such a `subscriber` is subscribed to such and such a topic `$topic`.

- public function publish($topic, $data); - this method will "Pull" Information Providers when they have some kind of Event inside them. Tell `post` what the topic of the Event is `topic` AND tell the data is `$data`.

[(20:40)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=1240 ) In this case, it's just string data, BUT in a real project, you can define a delimited `DTO` to unify.
IF there is NO such `$topic` on such a topic, we just leave.
IF, after all, it exists, then we take ALL Subscribers from there and call the `notify($data)` method for each one. - We notify you, look, something happened here. - You Subscribed - to Receive...

[(21:45)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=1305 ) `Publisher.php`

Publisher, Event Generator.

[(22:00)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=1320 ) `PublisherInterface.php`

- public function publish($data) - Subscriber Notice.

[(22:30)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=1350 ) `Publisher.php`

It has a `publish()` method and must be Implemented.

- private $topic - a specific theme, on which our `Publisher.php` works.

- private EventChannel - in the constructor, the created instance of the class comes to us.

- public function __construct($topic, EventChannelInterface $eventChannel) - when We Create `Publisher`, our Publisher, we "say" that you will work on such and such a `$topic` - on such and such a topic. And here you have `EventChannel` - `Event Channel`, with the help of which you will Notify ALL Subscribers about these Events,
who want to be notified. - The `Publisher` itself can NOT know anything about these Subscribers. Provided that `EventChannel.php` will NOT contain certain methods that "tell" it about it, BUT this is already a complication.

- public function publish($data) - We Define some data `$data` And "Throw" this data into `EventChannel`. - That is, when something happens to us - We Call this method, put the data there and this data is sent to the `EventChannel`.
For such and such a topic We send such and such data to the Communication channel.

[(24:10)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=1450 ) `Subscriber.php`

[(24:15)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=1455 ) `SubscriberInterface.php`

- public function notify($data) - we will Notify him by this method.

[(24:25)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=1465 ) `Subscriber.php`

- public function __construct($name) - We set for Convenience, for Debug a name...

- public function notify($data) - `Subscriber` has a defined method. IF some class wants to become `Subscriber` - it must be implemented from `SubscriberInterface` AND Implement `notify()` because it will be "Pull" by this method. - This method must be in it.
IF something happens somewhere, then Notification will occur by this method, this data `$data` will come to it. "Here" we write a report for our `Debugbar`. - The fact that I am such and such, here is my name, my name is like this, I am Notified with such and such data.

- getName() 

[(25:40)]( https://youtu.be/xKB2OqxF_t0?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=1540 ) That's actually EVERYTHING. Once again, let's go over the general work. `EventChannelJob.php`

We Create a Communication Channel. - We Create Publishers. That is, those Essences that are Observed. Something might happen to them. And, when this something Happens - a certain Reaction of other objects Follows.
We have `Subscribers`, that is, Subscribers to certain Events. - We created them And now we sign them. Signed, the Events themselves are coming And these Events are being worked out.

Here, in fact, ALL this `Event Channel` Design Pattern.

Other similar Design Patterns are a bit simpler, `Observer` and `Publisher-Subscriber`. `Publisher-Subscriber` is still different from `Event Channel` And `Observer` too.

#### Useful links:

Dmitry Afanasyev

[Design Pattern ►[ Event Channel ] ► Lesson #3]( https://www.youtube.com/watch?v=xKB2OqxF_t0&list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&index=3&t=1s&ab_channel=DmitryAfanasyev )

<https://ru.wikipedia.org/wiki/Канал_событий_(шаблон_проектирования)>

<https://stackoverflow.com/questions/63807930/target-class-controller-does-not-exist-laravel-8>

<https://bestofphp.com/repo/barryvdh-laravel-debugbar-php-debugging-and-profiling>