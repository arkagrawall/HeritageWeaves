<?PHP
$sender = 'noreply@bot.free.nf';
$recipient = 'rainbowsalt62@bot.free.nf';

$subject = "php mail test";
$message = "php test message";
$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}
?>