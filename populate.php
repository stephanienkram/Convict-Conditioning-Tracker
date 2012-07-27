<?php # POPULATE TABLES

include('conf.php');

# Pushups level 1 - Wall Pushups
$description = "Wall pushups are the first step of the ten step series required for complete mastery of the pushup family of movements. As the first step, this technique represents the easiest version of the pushup. Every able-bodied person should be able to do this exercise without a problem. Wall pushups are also the first movement in the therapy sequence of the pushup series. This exercise will be of great benefit to somebody coming out of an injury or following an operation, who is looking to promote healing and rebuild their strength slowly. The elbows, wrists and shoulders-most notably the delicate rotator cuff muscles within the shoulders-are particularly prone to chronic and acute injury. This exercise gently activates these areas, stimulating them, developing blood flow and tone. Beginners new to calisthenics must start any training program very gently to develop their technique and ability. They should start with this exercise.<br><b>Perfecting:</b><br>Every person reading this book should be able to do this exercise, unless they are disabled, badly injured or ill. If coming back from an injury or operation, this movement is a good 'tester,' allowing the athlete to feel out any weak points during rehabilitation.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 1.1, 'Wall Pushups', '$description', '1 set of 10', 'pictures/pushup1')";

mysql_query($q) or DIE("Pushup 1.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 1.2, 'Wall Pushups', '$description', '2 sets of 25', 'pictures/pushup1')";

mysql_query($q) or DIE("Pushup 1.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 1.3, 'Wall Pushups', '$description', '3 sets of 50', 'pictures/pushup1')";

mysql_query($q) or DIE("Pushup 1.3 not inserted. ".mysql_error());


# Pushups level 2 - Incline Pushups

$description = "This exercise continues where Step 1 (the wall pushup) leaves off, with the lower pressing angle meaning that more bodyweight has to be moved by the muscles of the upper body. The incline pushup is easier than the classic full pushup (Step 5). For most athletes this exercise won't place very great demands on the muscles, but it will be useful for the beginner to continue their training gently, or for rehabilitation purposes.<br><b>Perfecting:</b><br>Incline pushups should be done at 45 degree angle. If the beginner standard can 't be met at this angle, use a greater (more upright) angle-simply place the hands on an object higher than the body's midpoint. Once this is mastered, gradually use lesser angles until 45 degrees becomes easy. Harder angles can be attempted using progressively lower steps on a set of stairs.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 2.1, 'Incline Pushups', '$description', '1 set of 10', 'pictures/pushup2')";

mysql_query($q) or DIE("Pushup 2.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 2.2, 'Incline Pushups', '$description', '2 sets of 20', 'pictures/pushup2')";

mysql_query($q) or DIE("Pushup 2.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 2.3, 'Incline Pushups', '$description', '3 sets of 40', 'pictures/pushup2')";

mysql_query($q) or DIE("Pushup 2.3 not inserted. ".mysql_error());


#pushup level 3 - Kneeling Pushups

$description = "Kneeling pushups are Step 3 in the pushup series. They are an important movement for beginners to master, because they are the easiest type of pushup that can be performed prone, i.e., flat on the floor. Because of this, they form an important link between the first two steps, which are performed standing, and the harder prone techniques later in the series. Women often do kneeling pushups because they lack the relative upper body strength to perform the full pushup, but this exercise offers great benefits to guys as well. It's a good starting exercise for somebody who's maybe overweight or out of shape, and because you can pump up the upper body with relative ease in this position, kneeling pushups make an excellent warm up exercise you can do before attempting harder forms of pushup.<br><b>Perfecting:</b><br>If you find it impossible to perform full kneeling pushups, lessen your range of motion. Don't go all the way down to a fist width from the ground. Use a higher number of reps (about twenty) over a shorter range of motion you can perform comfortably, then workout by workout (keeping the reps high) gradually keep adding an inch of depth until the full movement is mastered.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 3.1, 'Kneeling Pushups', '$description', '1 set of 10', 'pictures/pushup3')";

mysql_query($q) or DIE("Pushup 3.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 3.1, 'Kneeling Pushups', '$description', '2 sets of 15', 'pictures/pushup3')";

mysql_query($q) or DIE("Pushup 3.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 3.3, 'Kneeling Pushups', '$description', '3 sets of 30', 'pictures/pushup3')";

mysql_query($q) or DIE("Pushup 3.3 not inserted. ".mysql_error());


# pushup level 4 - Half Pushups

$description = "The half pushup is an important exercise to master properly. You see a lot of guys doing pushups incorrectly, with their butt moving up as they bend at the hips. They do this because their waist and spinal muscles are weak. This exercise trains the waist and spine to keep the hips locked and aligned.<br><b>Perfecting:</b><br>If you can't do half pushups, shorten your range of motion until you are able to perform the technique as given above. If you are using a basketball to monitor your form, position yourself so that it's under your knees rather your hips. If you lower yourself from the arms extended position until your knees make contact with the ball, this will approximately equal a quarter pushup. Once you can do more than ten quarter pushups, position the ball a little higher up your thighs each time you practice until it is under your hips.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 4.1, 'Half Pushups', '$description', '1 set of 8', 'pictures/pushup4')";

mysql_query($q) or DIE("Pushup 4.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 4.2, 'Half Pushups', '$description', '2 sets of 12', 'pictures/pushup4')";

mysql_query($q) or DIE("Pushup 4.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 4.3, 'Half Pushups', '$description', '2 sets of 25', 'pictures/pushup4')";

mysql_query($q) or DIE("Pushup 4.3 not inserted. ".mysql_error());


# pushups level 5 - Full Pushups

$description = "This technique is the 'classic' pushup, the exercise most of us will remember from gym class. It's a fair guess that if you say the word 'pushup' to most people, they will naturally picture the full pushup. The full pushup is an excellent upper body exercise, working the arms, chest and shoulder girdle in an efficient manner. It's by no means the hardest form of pushup, however; in terms of difficulty it only represents Step 5 in a series of ten.<br><b>Perfecting:</b><br>You might be surprised how many people-even big, strong guys-eannot do full pushups properly. If you are in this group, return to half pushups using a basketball. If you have graduated from Step 4, you will be able to perform twenty-five reps with the ball under your hips. Gradually move the ball a few inches forward every workout, or whenever you can-keeping the reps the same. When you can go from the arms straight position to a bottom position where your jaw touches the ball, attempt the full version again.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 5.1, 'Full Pushups', '$description', '1 set of 5', 'pictures/pushup5')";

mysql_query($q) or DIE("Pushup 5.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 5.2, 'Full Pushups', '$description', '2 sets of 10', 'pictures/pushup5')";

mysql_query($q) or DIE("Pushup 5.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 5.3, 'Full Pushups', '$description', '2 sets of 20', 'pictures/pushup5')";

mysql_query($q) or DIE("Pushup 5.3 not inserted. ".mysql_error());


# pushup level 6 - close pushups

$description = "Close pushups are as old as the hills. They're a vitally important exercise in the pushup series, but are often overlooked in favor of flashier techniques like plyometric (clapping) pushups and decline pushups. This is a tragedy, because the close pushup is an essential tool to help you in your journey to mastering the one-arm pushup. Most athletes have trouble with the one-arm pushup because they find it difficult to press themselves up from the bottom position, when the arm is bent most acutely. This is because their elbows are weak when bent beyond a right angle. Because of the placement of the hands during close pushups, the athlete naturally bends his elbows to a greater degree to reach the bottom position than is the case with full pushups. This increased elbow flexion trains the triceps and strengthens the tendons of the elbow and wrist. As a result, athletes who have become comfortable with this movement will find one-arm pushups much more manageable when the time comes.<br><b>Perfecting:</b><br>If you cannot do close pushups with the hands touching (as described above), simply return to full pushups, and move the hands an inch or two closer every workout, keeping the reps quite high.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 6.1, 'Close Pushups', '$description', '1 set of 5', 'pictures/pushup6')";

mysql_query($q) or DIE("Pushup 6.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 6.2, 'Close Pushups', '$description', '2 sets of 10', 'pictures/pushup6')";

mysql_query($q) or DIE("Pushup 6.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 6.3, 'Close Pushups', '$description', '2 sets of 20', 'pictures/pushup6')";

mysql_query($q) or DIE("Pushup 6.3 not inserted. ".mysql_error());


# pushup level 7 - Uneven Pushups

$description = "This is the first of the advanced pushup exercises that will take the athlete from double arm pushups to the single arm variety. You can use stable objects-like bricks or a cinderblock instead of a basketball, but the basketball is best. The act of stabilizing the ball brings the seldom used rotator cuff muscles into play, strengthening them for the more intense exercises to come. You can use a sturdy soccer ball rather than a basketball, but a classic basketball is king because its tacky surface helps the palm grip.<br><b>Perfecting:</b><br>Anybody who can do close pushups properly should be ready to attempt this exercise with confidence. If there are problems at first, they will be due to a lack of coordination rather than insufficient strength. If you have trouble, try using stable objects rather than an unstable basketball-a simple house brick is a good alternative. Once you can do twenty reps with one hand on a flat brick, try two flat bricks, one on top of the other. When you can do twenty reps with three stacked bricks, attempt the exercise with the basketball again.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 7.1, 'Uneven Pushups', '$description', '1 set of 5 (each side)', 'pictures/pushup7')";

mysql_query($q) or DIE("Pushup 7.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 7.2, 'Uneven Pushups', '$description', '2 sets of 10 (each side)', 'pictures/pushup7')";

mysql_query($q) or DIE("Pushup 7.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 7.3, 'Uneven Pushups', '$description', '2 sets of 20 (each side)', 'pictures/pushup7')";

mysql_query($q) or DIE("Pushup 7.3 not inserted. ".mysql_error());


# pushup level 8 - Half One Arm Pushups

$description = "Half one-arm pushups are Step 8 of the pushup series of movements. With this technique, the athlete finally moves from bilateral (two-sided) exercises to unilateral (one-sided) work. This is an important stage in the series. Working on half one-arm pushups will teach the athlete the balance and positioning necessary to master full one-arm pushups. Because only one limb transmits the moving forces, this exercise will also prepare the hand, wrist and shoulder joints for subsequent steps. Half one-arm pushups are an essential exercise in the series, and must be mastered for the reasons given above. However, the elbows are not required to bend very greatly in this exercise, so it must never be performed by itself as the sum total of any pushup program. It should always be followed with a movement where the elbows are bent beyond ninety degrees in the bottom position; either close pushups or uneven pushups should be added afterwards.<br><b>Perfecting:</b>If you can't do half one-arm pushups, start with quarter one-arm pushups with the ball under your knees. Gradually lengthen your range of motion by moving the basketball forwards over time, as with half pushups (see Step 4).";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 8.1, 'Half One-Arm Pushups', '$description', '1 set of 5 (each side)', 'pictures/pushup8')";

mysql_query($q) or DIE("Pushup 8.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 8.2, 'Half One-Arm Pushups', '$description', '2 sets of 10 (each side)', 'pictures/pushup8')";

mysql_query($q) or DIE("Pushup 8.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 8.3, 'Half One-Arm Pushups', '$description', '2 sets of 20 (each side)', 'pictures/pushup8')";

mysql_query($q) or DIE("Pushup 8.3 not inserted. ".mysql_error());


# Pushup level 9 - Level Pushups

$description = "The lever pushup, when performed properly, is very nearly as difficult as the one-arm pushup. This is precisely why this exercise forms such a useful penultimate step in the series. You will find that the arm on the ball can contribute very little force, due to its position stabilizing the ball away  from the body-this forces the non-ball arm to work very powerfully. If you are not yet strong enough to come out of the bottom position of the one-arm pushup, you can use this exercise to gently assist yourself until you get there.<br><b>Perfecting:</b><br>It's difficult to apply much force with the arm out straight, due to leverage. To make the exercise easier, bend the elbow of the arm on the basketball, bringing the ball closer to your body. Don't go too far-bringing it all the way under your body will transform this exercise into Step 7, uneven pushups. As you get stronger over time, gradually move the ball out away from your body until you can do the exercise with a straight arm.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 9.1, 'Lever Pushups', '$description', '1 set of 5 (each side)', 'pictures/pushup9')";

mysql_query($q) or DIE("Pushup 9.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 9.2, 'Lever Pushups', '$description', '2 sets of 10 (each side)', 'pictures/pushup9')";

mysql_query($q) or DIE("Pushup 9.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 9.3, 'Lever Pushups', '$description', '2 sets of 20 (each side)', 'pictures/pushup9')";

mysql_query($q) or DIE("Pushup 9.3 not inserted. ".mysql_error());


# pushup level 10 - One-Arm Pushup

$description = "The one-arm pushup when performed with pure form, is the gold standard of chest and elbow power, and it's an impressive sight to see. Many athletes claim to be able to do this exercise without any problems, but don't be fooled. When you ask them to put their money where their mouth
is, their pushups are a joke-they splay out their legs, twist their torsos into ugly shapes to make the exercise easier, and violently strain for shallow reps on wobbly, weak arms. Without doubt, the true master of the one-arm pushup is a rare beast. Make sure you become one of this endangered species.<br><b>Perfecting:</b><br>If you have mastered the lever pushup, the one-arm pushup shouldn't be too intimidating. But if you have trouble doing five reps of the one-arm pushup in good form, go back to Step 9, and ensure that you are can use perfect form for twenty repetitions of the lever pushup. If you can do this but still have trouble with the one-arm pushup, keep working with lever pushups until you can do thirty repetitions, before trying again.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 10.1, 'Lever Pushups', '$description', '1 set of 5 (each side)', 'pictures/pushup10')";

mysql_query($q) or DIE("Pushup 10.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 10.2, 'Lever Pushups', '$description', '2 sets of 10 (each side)', 'pictures/pushup10')";

mysql_query($q) or DIE("Pushup 10.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 10.3, 'Lever Pushups', '$description', '1 set of 100 (each side)', 'pictures/pushup10')";

mysql_query($q) or DIE("Pushup 10.3 not inserted. ".mysql_error());

echo "Done!";

?>