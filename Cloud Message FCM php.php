<?php

			// FCM API Url
                $url = 'https://fcm.googleapis.com/fcm/send';
                // Put your Server Key here
                $apiKey = "web push key firebase cloud message ";

                // demo api >>  AAPA91bHhAa_JQW6fCYe6iCSBlwBZjGqKK2uuYcwVAVNRFDj-f5myRk9cza5AZu7hUy7rS0FCI0u4dQb0cE-Ark0ix1KunDDxCex8iAC2x7fWnoo0jRkUoEI96khHwWsnkzciOQ2RSd5p

                // Compile headers in one variable
                $headers = array (
                  'Authorization:key=' . $apiKey,
                  'Content-Type:application/json'
                );

                // Add notification content to a variable for easy reference
                $notifData = [
                  'title' => "Let's go to Picnic tomorrow",
                  'body' => "Its tooros time!",
                  'image' => "https://tooros.in/promo/promo_1672486383.png"
                  ];


                // Create the api body
                $apiBody = [
                  'notification' => $notifData,
                  'time_to_live' => 600, // optional - In Seconds
                   'to' => '/topics/all' // here topic "all"
                                           /// by shubhamjit
                  //'registration_ids' = ID ARRAY
                  //'to' => 'cc3y906oCS0:APA91bHhifJikCe-6q_5EXTdkAu57Oy1bqkSExZYkBvL6iKCq2hq3nrqKWymoxfTJRnzMSqiUkrWh4uuzzEt3yF5KZTV6tLQPOe9MCepimPDGTkrO8lyDy79O5sv046-etzqCGmKsKT4'
                ]; 

                // Initialize curl with the prepared headers and body
                $ch = curl_init();
                curl_setopt ($ch, CURLOPT_URL, $url);
                curl_setopt ($ch, CURLOPT_POST, true);
                curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt ($ch, CURLOPT_POSTFIELDS, json_encode($apiBody));

                // Execute call and save result
                $result = curl_exec($ch);
                print($result);
                // Close curl after call
                curl_close($ch);

                return $result;

                ?>
		