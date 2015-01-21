<?php
//Get faq content
switch ($_GET['id']) 
{
    case 1:
        print "Customers who need something moved list their freight on Freightmeta in just a few simple steps. We'll ask you what you're shipping, the origin and destination points, when you need it shipped etc. Our network of wordlwild transport companies will then be alerted to your transport request. Transporters will then provide online quotes to move your goods. When you find a quote that is suitable to your needs and budget simply accept the quote. ";
        break;
    case 2:
        print "You can ship just about anything. Commercial freight, vehicles, horses and livestock, parcels and packages, boats, shipping containers, household goods... just about anything. Once you list your freight we will alert all relevant transport providers. So if you need a boat transported for example, we'll alert only boat transporters about your freight request.";
        break;
    case 3:
        print "After you've accepted a quote from a transporter you will not be required to pay. It's FREE!";
        break;
    case 4:
        print 'No problems. You simply tick the box "unsure of item weight or dimensions" and we will make sure the transporter is aware of this.';
        break;
    case 5:
        print 'No problems. the transporter has the ability to ask you online questions about your freight.';
        break;
    case 6:
        print 'After a quote has been accepted, your details will be sent to the transporter. The transporter will contact you within 2 working days to arrange pickup and delivery.';
        break;
    case 7:
        print "The best way to get more quotes is put as much information about your freight online as possible. Transporters love this because it makes quoting a delivery easy. If you can upload photos of your shipment that would be fantastic. As they say... a picture speaks a thousand words!";
        break;
    case 8:
        print <<<HERE
        "No problems. Simply <a style="color: #5aa5cc; text-decoration: underline;" href="./login?usr=all"> login</a> to your dashboard and click 'Edit' next to your listing. If you need to change any details it's better to do it as soon as possible as all quotes you've received up to that point in time will be automatically cancelled. "               
HERE;
        break;
    case 9:
        print "Freightmeta is driven by a customer review system. Before selecting a transporter take a look at their profile which contains any reviews from previous customers both good and bad. When your shipment is complete, we'll ask you to take a minute to review your transporter, and this will in turn be helpful to another customer down the track.";
        break;
    case 10:
        print "You should usually get a number of quotes within a couple of days.";
        break;
}