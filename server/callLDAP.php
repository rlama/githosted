<?php
//error_reporting(E_ALL & ~E_NOTICE)

$json = file_get_contents('php://input'); // '{"username":"user", "password":"pass"}' ;//
$data = json_decode($json);

//print_r($data);

$username = ($_POST['username']);
$password = ($_POST['password']);


if($username == 'user' && $password == 'pass')){

		$jsonData = 
		
		'
		[
    {
        "id": 1,
        "Email": "1@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user1",
        "pic": "pics/user1"
    },
    {
        "id": 2,
        "Email": "2@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Service",
        "Username": "user2",
        "pic": "pics/user2"
    },
    {
        "id": 3,
        "Email": "3@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Producer",
        "Username": "user3",
        "pic": "pics/user3"
    },
    {
        "id": 4,
        "Email": "4@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user4",
        "pic": "pics/user4"
    },
    {
        "id": 5,
        "Email": "5@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user5",
        "pic": "pics/user5"
    },
    {
        "id": 6,
        "Email": "6@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user6",
        "pic": "pics/user6"
    },
    {
        "id": 7,
        "Email": "7@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user7",
        "pic": "pics/user7"
    },
    {
        "id": 8,
        "Email": "8@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user8",
        "pic": "pics/user8"
    },
    {
        "id": 9,
        "Email": "9@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user9",
        "pic": "pics/user9"
    },
    {
        "id": 10,
        "Email": "10@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user10",
        "pic": "pics/user10"
    },
    {
        "id": 11,
        "Email": "11@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user11",
        "pic": "pics/user11"
    },
    {
        "id": 12,
        "Email": "12@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user12",
        "pic": "pics/user12"
    },
    {
        "id": 13,
        "Email": "13@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user13",
        "pic": "pics/user13"
    },
    {
        "id": 14,
        "Email": "14@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user14",
        "pic": "pics/user14"
    },
    {
        "id": 15,
        "Email": "15@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user15",
        "pic": "pics/user15"
    },
    {
        "id": 16,
        "Email": "16@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user16",
        "pic": "pics/user16"
    },
    {
        "id": 17,
        "Email": "17@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Service",
        "Username": "user17",
        "pic": "pics/user17"
    },
    {
        "id": 18,
        "Email": "18@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Service",
        "Username": "user18",
        "pic": "pics/user18"
    },
    {
        "id": 19,
        "Email": "19@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user19",
        "pic": "pics/user19"
    },
    {
        "id": 20,
        "Email": "20@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user20",
        "pic": "pics/user20"
    },
    {
        "id": 21,
        "Email": "21@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user21",
        "pic": "pics/user21"
    },
    {
        "id": 22,
        "Email": "22@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user22",
        "pic": "pics/user22"
    },
    {
        "id": 23,
        "Email": "23@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user23",
        "pic": "pics/user23"
    },
    {
        "id": 24,
        "Email": "24@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Senior Art Director",
        "Username": "user24",
        "pic": "pics/user24"
    },
    {
        "id": 25,
        "Email": "25@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Executive",
        "Username": "user25",
        "pic": "pics/user25"
    },
    {
        "id": 26,
        "Email": "26@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user26",
        "pic": "pics/user26"
    },
    {
        "id": 27,
        "Email": "27@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user27",
        "pic": "pics/user27"
    },
    {
        "id": 28,
        "Email": "28@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Traffic Manager",
        "Username": "user28",
        "pic": "pics/user28"
    },
    {
        "id": 29,
        "Email": "29@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user29",
        "pic": "pics/user29"
    },
    {
        "id": 30,
        "Email": "30@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user30",
        "pic": "pics/user30"
    },
    {
        "id": 31,
        "Email": "31@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user31",
        "pic": "pics/user31"
    },
    {
        "id": 32,
        "Email": "32@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Manager",
        "Username": "user32",
        "pic": "pics/user32"
    },
    {
        "id": 33,
        "Email": "33@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Executive",
        "Username": "user33",
        "pic": "pics/user33"
    },
    {
        "id": 34,
        "Email": "34@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Executive",
        "Username": "user34",
        "pic": "pics/user34"
    },
    {
        "id": 35,
        "Email": "35@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user35",
        "pic": "pics/user35"
    },
    {
        "id": 36,
        "Email": "36@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user36",
        "pic": "pics/user36"
    },
    {
        "id": 37,
        "Email": "37@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user37",
        "pic": "pics/user37"
    },
    {
        "id": 38,
        "Email": "38@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user38",
        "pic": "pics/user38"
    },
    {
        "id": 39,
        "Email": "39@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user39",
        "pic": "pics/user39"
    },
    {
        "id": 40,
        "Email": "40@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Digital Producer",
        "Username": "user40",
        "pic": "pics/user40"
    },
    {
        "id": 41,
        "Email": "41@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Director",
        "Username": "user41",
        "pic": "pics/user41"
    },
    {
        "id": 42,
        "Email": "42@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user42",
        "pic": "pics/user42"
    },
    {
        "id": 43,
        "Email": "43@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user43",
        "pic": "pics/user43"
    },
    {
        "id": 44,
        "Email": "44@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Web Developer",
        "Username": "user44",
        "pic": "pics/user44"
    },
    {
        "id": 45,
        "Email": "45@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user45",
        "pic": "pics/user45"
    },
    {
        "id": 46,
        "Email": "46@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Strategy Director",
        "Username": "user46",
        "pic": "pics/user46"
    },
    {
        "id": 47,
        "Email": "47@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user47",
        "pic": "pics/user47"
    },
    {
        "id": 48,
        "Email": "48@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Copywriter",
        "Username": "user48",
        "pic": "pics/user48"
    },
    {
        "id": 49,
        "Email": "49@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Multimedia Developer",
        "Username": "user49",
        "pic": "pics/user49"
    },
    {
        "id": 50,
        "Email": "50@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user50",
        "pic": "pics/user50"
    },
    {
        "id": 51,
        "Email": "51@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Copywriter",
        "Username": "user51",
        "pic": "pics/user51"
    },
    {
        "id": 52,
        "Email": "52@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user52",
        "pic": "pics/user52"
    },
    {
        "id": 53,
        "Email": "53@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user53",
        "pic": "pics/user53"
    },
    {
        "id": 54,
        "Email": "54@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user54",
        "pic": "pics/user54"
    },
    {
        "id": 55,
        "Email": "55@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Manager",
        "Username": "user55",
        "pic": "pics/user55"
    },
    {
        "id": 56,
        "Email": "56@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Senior Account Director",
        "Username": "user56",
        "pic": "pics/user56"
    },
    {
        "id": 57,
        "Email": "57@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Strategic Planner",
        "Username": "user57",
        "pic": "pics/user57"
    },
    {
        "id": 58,
        "Email": "58@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user58",
        "pic": "pics/user58"
    },
    {
        "id": 59,
        "Email": "59@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Senior Data Analyst",
        "Username": "user59",
        "pic": "pics/user59"
    },
    {
        "id": 60,
        "Email": "60@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user60",
        "pic": "pics/user60"
    },
    {
        "id": 61,
        "Email": "61@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Senior Account Manager",
        "Username": "user61",
        "pic": "pics/user61"
    },
    {
        "id": 62,
        "Email": "62@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Group Account Director",
        "Username": "user62",
        "pic": "pics/user62"
    },
    {
        "id": 63,
        "Email": "63@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Executive",
        "Username": "user63",
        "pic": "pics/user63"
    },
    {
        "id": 64,
        "Email": "64@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user64",
        "pic": "pics/user64"
    },
    {
        "id": 65,
        "Email": "65@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user65",
        "pic": "pics/user65"
    },
    {
        "id": 66,
        "Email": "66@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Business Development Manager",
        "Username": "user66",
        "pic": "pics/user66"
    },
    {
        "id": 67,
        "Email": "67@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user67",
        "pic": "pics/user67"
    },
    {
        "id": 68,
        "Email": "68@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Graphic Artist",
        "Username": "user68",
        "pic": "pics/user68"
    },
    {
        "id": 69,
        "Email": "69@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Digital Strategist",
        "Username": "user69",
        "pic": "pics/user69"
    },
    {
        "id": 70,
        "Email": "70@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user70",
        "pic": "pics/user70"
    },
    {
        "id": 71,
        "Email": "71@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Director",
        "Username": "user71",
        "pic": "pics/user71"
    },
    {
        "id": 72,
        "Email": "72@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Senior Producer",
        "Username": "user72",
        "pic": "pics/user72"
    },
    {
        "id": 73,
        "Email": "73@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Senior Account Manager",
        "Username": "user73",
        "pic": "pics/user73"
    },
    {
        "id": 74,
        "Email": "74@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user74",
        "pic": "pics/user74"
    },
    {
        "id": 75,
        "Email": "75@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Manager",
        "Username": "user75",
        "pic": "pics/user75"
    },
    {
        "id": 76,
        "Email": "76@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Art Director",
        "Username": "user76",
        "pic": "pics/user76"
    },
    {
        "id": 77,
        "Email": "77@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user77",
        "pic": "pics/user77"
    },
    {
        "id": 78,
        "Email": "78@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Manager",
        "Username": "user78",
        "pic": "pics/user78"
    },
    {
        "id": 79,
        "Email": "79@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user79",
        "pic": "pics/user79"
    },
    {
        "id": 80,
        "Email": "80@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user80",
        "pic": "pics/user80"
    },
    {
        "id": 81,
        "Email": "81@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user81",
        "pic": "pics/user81"
    },
    {
        "id": 82,
        "Email": "82@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user82",
        "pic": "pics/user82"
    },
    {
        "id": 83,
        "Email": "83@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Manager",
        "Username": "user83",
        "pic": "pics/user83"
    },
    {
        "id": 84,
        "Email": "84@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Freelance Associate Producer",
        "Username": "user84",
        "pic": "pics/user84"
    },
    {
        "id": 85,
        "Email": "85@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user85",
        "pic": "pics/user85"
    },
    {
        "id": 86,
        "Email": "86@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Senior Account Manager",
        "Username": "user86",
        "pic": "pics/user86"
    },
    {
        "id": 87,
        "Email": "87@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user87",
        "pic": "pics/user87"
    },
    {
        "id": 88,
        "Email": "88@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Executive",
        "Username": "user88",
        "pic": "pics/user88"
    },
    {
        "id": 89,
        "Email": "89@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user89",
        "pic": "pics/user89"
    },
    {
        "id": 90,
        "Email": "90@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Finance Director",
        "Username": "user90",
        "pic": "pics/user90"
    },
    {
        "id": 91,
        "Email": "91@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Director",
        "Username": "user91",
        "pic": "pics/user91"
    },
    {
        "id": 92,
        "Email": "92@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Executive",
        "Username": "user92",
        "pic": "pics/user92"
    },
    {
        "id": 93,
        "Email": "93@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Senior Account Manager",
        "Username": "user93",
        "pic": "pics/user93"
    },
    {
        "id": 94,
        "Email": "94@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Director",
        "Username": "user94",
        "pic": "pics/user94"
    },
    {
        "id": 95,
        "Email": "95@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Executive",
        "Username": "user95",
        "pic": "pics/user95"
    },
    {
        "id": 96,
        "Email": "96@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Director",
        "Username": "user96",
        "pic": "pics/user96"
    },
    {
        "id": 97,
        "Email": "97@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Analyst",
        "Username": "user97",
        "pic": "pics/user97"
    },
    {
        "id": 98,
        "Email": "98@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user98",
        "pic": "pics/user98"
    },
    {
        "id": 99,
        "Email": "99@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Manager",
        "Username": "user99",
        "pic": "pics/user99"
    },
    {
        "id": 100,
        "Email": "100@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Senior Producer",
        "Username": "user100",
        "pic": "pics/user100"
    },
    {
        "id": 101,
        "Email": "101@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Senior Account Manager",
        "Username": "user101",
        "pic": "pics/user101"
    },
    {
        "id": 102,
        "Email": "102@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Production Manager",
        "Username": "user102",
        "pic": "pics/user102"
    },
    {
        "id": 103,
        "Email": "103@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Copywriter",
        "Username": "user103",
        "pic": "pics/user103"
    },
    {
        "id": 104,
        "Email": "104@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Senior Strategy Planner",
        "Username": "user104",
        "pic": "pics/user104"
    },
    {
        "id": 105,
        "Email": "105@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Director",
        "Username": "user105",
        "pic": "pics/user105"
    },
    {
        "id": 106,
        "Email": "106@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Group Account Director",
        "Username": "user106",
        "pic": "pics/user106"
    },
    {
        "id": 107,
        "Email": "107@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Senior Account Manager",
        "Username": "user107",
        "pic": "pics/user107"
    },
    {
        "id": 108,
        "Email": "108@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Researcher",
        "Username": "user108",
        "pic": "pics/user108"
    },
    {
        "id": 109,
        "Email": "109@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user109",
        "pic": "pics/user109"
    },
    {
        "id": 110,
        "Email": "110@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user110",
        "pic": "pics/user110"
    },
    {
        "id": 111,
        "Email": "111@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user111",
        "pic": "pics/user111"
    },
    {
        "id": 112,
        "Email": "112@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user112",
        "pic": "pics/user112"
    },
    {
        "id": 113,
        "Email": "113@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Senior Strategy Planner",
        "Username": "user113",
        "pic": "pics/user113"
    },
    {
        "id": 114,
        "Email": "114@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user114",
        "pic": "pics/user114"
    },
    {
        "id": 115,
        "Email": "115@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Director",
        "Username": "user115",
        "pic": "pics/user115"
    },
    {
        "id": 116,
        "Email": "116@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user116",
        "pic": "pics/user116"
    },
    {
        "id": 117,
        "Email": "117@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Group Account Director",
        "Username": "user117",
        "pic": "pics/user117"
    },
    {
        "id": 118,
        "Email": "118@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Manager",
        "Username": "user118",
        "pic": "pics/user118"
    },
    {
        "id": 119,
        "Email": "119@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user119",
        "pic": "pics/user119"
    },
    {
        "id": 120,
        "Email": "120@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user120",
        "pic": "pics/user120"
    },
    {
        "id": 121,
        "Email": "121@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Freelance Associate Producer",
        "Username": "user121",
        "pic": "pics/user121"
    },
    {
        "id": 122,
        "Email": "122@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user122",
        "pic": "pics/user122"
    },
    {
        "id": 123,
        "Email": "123@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Creative Group Head",
        "Username": "user123",
        "pic": "pics/user123"
    },
    {
        "id": 124,
        "Email": "124@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Director",
        "Username": "user124",
        "pic": "pics/user124"
    },
    {
        "id": 125,
        "Email": "125@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Executive",
        "Username": "user125",
        "pic": "pics/user125"
    },
    {
        "id": 126,
        "Email": "126@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user126",
        "pic": "pics/user126"
    },
    {
        "id": 127,
        "Email": "127@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Manager",
        "Username": "user127",
        "pic": "pics/user127"
    },
    {
        "id": 128,
        "Email": "128@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Assistant",
        "Username": "user128",
        "pic": "pics/user128"
    },
    {
        "id": 129,
        "Email": "129@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Finance Director",
        "Username": "user129",
        "pic": "pics/user129"
    },
    {
        "id": 130,
        "Email": "130@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user130",
        "pic": "pics/user130"
    },
    {
        "id": 131,
        "Email": "131@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Front-end Developer",
        "Username": "user131",
        "pic": "pics/user131"
    },
    {
        "id": 132,
        "Email": "132@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user132",
        "pic": "pics/user132"
    },
    {
        "id": 133,
        "Email": "133@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Payroll Officer",
        "Username": "user133",
        "pic": "pics/user133"
    },
    {
        "id": 134,
        "Email": "134@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": null,
        "Username": "user134",
        "pic": "pics/user134"
    },
    {
        "id": 135,
        "Email": "135@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Strategy Planner",
        "Username": "user135",
        "pic": "pics/user135"
    },
    {
        "id": 136,
        "Email": "136@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Senior Account Director",
        "Username": "user136",
        "pic": "pics/user136"
    },
    {
        "id": 137,
        "Email": "137@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Senior Account Manager",
        "Username": "user137",
        "pic": "pics/user137"
    },
    {
        "id": 138,
        "Email": "138@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Content Manager",
        "Username": "user138",
        "pic": "pics/user138"
    },
    {
        "id": 139,
        "Email": "139@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Finance Director",
        "Username": "user139",
        "pic": "pics/user139"
    },
    {
        "id": 140,
        "Email": "140@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Web Developer",
        "Username": "user140",
        "pic": "pics/user140"
    },
    {
        "id": 141,
        "Email": "141@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Group Account Director",
        "Username": "user141",
        "pic": "pics/user141"
    },
    {
        "id": 142,
        "Email": "142@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Account Manager",
        "Username": "user142",
        "pic": "pics/user142"
    },
    {
        "id": 143,
        "Email": "143@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Digital Consultant",
        "Username": "user143",
        "pic": "pics/user143"
    },
    {
        "id": 144,
        "Email": "144@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Digital Designer",
        "Username": "user144",
        "pic": "pics/user144"
    },
    {
        "id": 145,
        "Email": "145@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Senior Developer",
        "Username": "user145",
        "pic": "pics/user145"
    },
    {
        "id": 146,
        "Email": "146@mercerbell.com.au",
        "Contact": "0123 456 789",
        "Title": "Digital Creative Lead",
        "Username": "user146",
        "pic": "pics/user146"
    }
]
		';
		
		
		//print json_encode($jsonData);
		print $jsonData;
			
			//###########

		}
		else {
			echo "notsuccess";
		}
		
	}

?>
