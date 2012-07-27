<?php # POPULATE TABLES

include('conf.php');

## PUSHUPS ##

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

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pushup', 3.2, 'Kneeling Pushups', '$description', '2 sets of 15', 'pictures/pushup3')";

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

echo "Pushups done!<br>";


## SQUATS ##

# Squats level 1 - Shoulderstand Squats
$description = "Shoulderstand squats are the perfect preliminary exercise for anybody who wants to start squatting. Due to the inverse position of the body, there is virtually no weight going through the knees and lower back. This makes them an ideal rehabilitation exercise to help those with back or knee injuries-perhaps coming out of surgery-to get back into sports where leg motion is crucial. In strength terms, shoulderstand squats are in fact harder on the upper body than the lower body. But they do free up tight joints, increase range of motion and set beginners on the road to perfect form.<br><b>Perfecting:</b><br>At the first attempt, not everybody will be able to touch the knees to the forehead. Try to increase the depth of your knees every workout and your joints will soon loosen. The technique will be virtually impossible for people with very fat stomachs, because the paunch gets in the way. Practicing on an empty stomach will help, until you shed those excess pounds.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 1.1, 'Shoulderstand Squats', '$description', '1 set of 10', 'pictures/squat1')";

mysql_query($q) or DIE("Squat 1.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 1.2, 'Shoulderstand Squats', '$description', '2 sets of 25', 'pictures/squat1')";

mysql_query($q) or DIE("Squat 1.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 1.3, 'Shoulderstand Squats', '$description', '3 sets of 50', 'pictures/squat1')";

mysql_query($q) or DIE("Squat 1.3 not inserted. ".mysql_error());


# Squats level 2 - Jackknife Squats

$description = "For jackknife squats, the torso is angled forwards so that it's not directly above the legs; as a result, part of the weight is transmitted through the arms. This exercise is about half as difficult as the standard bodyweight full squat (Step 5), and is a great way to prepare the lower body muscles and tendons for later steps. Performed correctly, it will also give beginners the balance and Achilles' tendon flexibility required to master the bottom position of a full squat.<br><b>Perfecting:</b><br>This exercise is hardest at the very bottom position, where the lower limbs take the majority of the body's weight. If this is difficult, gradually work to the bottom position by increasing your squatting depth by an inch or so each workout. An alternative method would be to use more arm power to share the load taken by your legs, and help you get out of the bottom position. Try to use less arm strength and rely on the legs more as they become stronger.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 2.1, 'Jackknife Squats', '$description', '1 set of 10', 'pictures/squat2')";

mysql_query($q) or DIE("Squat 2.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 2.2, 'Jackknife Squats', '$description', '2 sets of 20', 'pictures/squat2')";

mysql_query($q) or DIE("Squat 2.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 2.3, 'Jackknife Squats', '$description', '3 sets of 40', 'pictures/squat2')";

mysql_query($q) or DIE("Squat 2.3 not inserted. ".mysql_error());


#squat level 3 - Supported Squat

$description = "Supported squats are the last exercise before the athlete progresses onto half squats. This exercise forms an ideal link between the jackknife squat (where the legs move the majority of the body's weight) and the half squat (where the legs move virtually all the weight of the body). Supported squats continue adding flexibility and strength to the athlete's lower limbs. They condition the tendons, ligaments and soft tissues of the knees. They are a good way to continue perfecting form, most importantly the ability to push up from the bottom position using strength alone rather than momentum.<br><b>Perfecting:</b><br>Fine-tuning the amount of leg strength required on this exercise couldn't be simpler; to make the exercise easier on the lower body, simply use more upper body strength. As you become more comfortable in the bottom position, gradually use less arm strength to assist you in getting back up.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 3.1, 'Supported Squat', '$description', '1 set of 10', 'pictures/squat3')";

mysql_query($q) or DIE("Squat 3.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 3.2, 'Supported Squat', '$description', '2 sets of 15', 'pictures/squat3')";

mysql_query($q) or DIE("Squat 3.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 3.3, 'Supported Squat', '$description', '3 sets of 30', 'pictures/squat3')";

mysql_query($q) or DIE("Squat 3.3 not inserted. ".mysql_error());


# squat level 4 - Half Squats

$description = "Halfsquats are the first step in the squatting series where you are handling your full bodyweight without any assistance. As such, they deserve respect. This exercise will teach you the balance and basic body positioning under gravity that you need to excel at harder forms of squatting. You will also begin to learn the optimum knee and foot positioning for your unique build. The thighs are very powerful in this top position, and for this reason the rep ranges given below are higher than normal. The muscles of your hips and inner thighs in particular will grow stronger as a result of mastering this movement.<br><b>Perfecting:</b><br>If you can't perform half squats in the style described above, start with quarter squats instead and add an inch of depth every time you can are able.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 4.1, 'Half Squats', '$description', '1 set of 8', 'pictures/squat4')";

mysql_query($q) or DIE("Squat 4.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 4.2, 'Half Squats', '$description', '2 sets of 35', 'pictures/squat4')";

mysql_query($q) or DIE("Squat 4.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 4.3, 'Half Squats', '$description', '2 sets of 50', 'pictures/squat4')";

mysql_query($q) or DIE("Squat 4.3 not inserted. ".mysql_error());


# squats level 5 - Full Squats

$description = "Full squats are the classic bodyweight leg exercise, used productively the world over for many thousands of years. And not without reason; full squats strengthen the knees, and add power and athleticism to every muscle in the thighs, as well as the glutes, spinal muscles and hips. The entire lower leg is conditioned, including the calves, anterior tibialis (shin muscles), ankles and even the soles of the feet. Full squats help legs retain their youthful vigor.<br><b>Perfecting:</b><br>If you have met the progression standard for half squats, full squats won't prove much of a problem. Due to leverage, the exercise will be hardest in the bottom position. This will be particularly true for tall people with long femurs (i.e., thighbones). If you cannot meet the beginner standard, return to doing half squats and slowly add an inch of depth to your technique whenever you get stronger. Don't rush, and resist the urge to bounce or rock forwards onto your toes. Use pure muscular power, or don't bother!";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 5.1, 'Full Squats', '$description', '1 set of 5', 'pictures/squat5')";

mysql_query($q) or DIE("Squat 5.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 5.2, 'Full Squats', '$description', '2 sets of 10', 'pictures/squat5')";

mysql_query($q) or DIE("Squat 5.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 5.3, 'Full Squats', '$description', '2 sets of 30', 'pictures/squat5')";

mysql_query($q) or DIE("Squat 5.3 not inserted. ".mysql_error());


# squat level 6 - close squats

$description = "Close squats have all the benefits of full squats, but with an amplified effect on the quadriceps. Over time, this exercise really strengthens the knees, shins, and gluteal muscles, tightening up the butt better than any machine.<br><b>Perfecting:</b><br>Many trainees who have rushed through the earlier steps often experience problems with the close squat. The biggest problem is the tendency to overbalance and fall back in or near the bottom position. This tendency will be amplified for tall athletes with long thighs. The problem is caused by a lack of strength in the frontal shin muscles, combined with a lack of the correct equilibrium. If you have rushed the series so far, go back to Step 3 and follow the program properly. If you still have problems, go back to the full squat, and bring your feet an inch closer together every time you work out. Keeping your arms straight out in front will help throw your weight forwards. Holding a weight such as a light dumbbell, book or bottle of water in the outstretched hand s will also help, but try to avoid this if you can. Some athletes really struggle with this exercise due to their structure. If this is you, completing this step with the heels one hand span apart is acceptable.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 6.1, 'Close Squats', '$description', '1 set of 5', 'pictures/squat6')";

mysql_query($q) or DIE("Squat 6.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 6.2, 'Close Squats', '$description', '2 sets of 10', 'pictures/squat6')";

mysql_query($q) or DIE("Squat 6.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 6.3, 'Close Squats', '$description', '2 sets of 20', 'pictures/squat6')";

mysql_query($q) or DIE("Squat 6.3 not inserted. ".mysql_error());


# squat level 7 - Uneven Squats

$description = "Uneven squats are the first big step towards mastering unilateral squats. Up until now, the effect of the steps in the squat series has been symmetrical; they have developed both legs equally. In this exercise, the leg on the ball cannot supply much power due to its raised position and the fact that it has to control the ball. The non-ball leg does most of the work, and acquires superior strength while still having enough help to push the athlete out of the difficult bottom position. The balance and coordination are also greatly improved as a result of this exercise.<br><b>Perfecting:</b><br>This exercise requires more skill and more strength than the earlier steps . If balancing on the basketball is a problem, use a stable alternative (e.g., three flat bricks) instead. If you still have trouble, use a lower object than the ball (e.g., one brick), and build up the height as you gain confidence and balance.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 7.1, 'Uneven Squats', '$description', '1 set of 5 (each side)', 'pictures/squat7')";

mysql_query($q) or DIE("Squat 7.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 7.2, 'Uneven Squats', '$description', '2 sets of 10 (each side)', 'pictures/squat7')";

mysql_query($q) or DIE("Squat 7.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 7.3, 'Uneven Squats', '$description', '2 sets of 20 (each side)', 'pictures/squat7')";

mysql_query($q) or DIE("Squat 7.3 not inserted. ".mysql_error());


# squat level 8 - Half Leg Squats

$description = "This exercise is the first full unilateral (one-limbed) movement in the series. It's an important stage to master, because it teaches the athlete the balance required before full one-leg squats can be attempted. It's during this exercise that the athlete also begins to learn the skill of holding the nonworking leg above the ground for extended periods . This is not easy, and requires very strong hip flexors, muscles that are weak in most men. Because only one leg is moving the weight of the body, increased leg strength is developed-but only in the top range. For this reason, when the athlete is practicing this exercise, they should always follow it up with an exercise where a full range of motion is required; preferably close squats or uneven squats.<br><b>Perfecting:</b><br>This exercise should prove no problem to an athlete who has met the progression standard of uneven squats. If you still find it a challenge, just begin with a shorter range of motion, and gradually add depth over time.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 8.1, 'Half Leg Squats', '$description', '1 set of 5 (each side)', 'pictures/squat8')";

mysql_query($q) or DIE("Squat 8.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 8.2, 'Half Leg Squats', '$description', '2 sets of 10 (each side)', 'pictures/squat8')";

mysql_query($q) or DIE("Squat 8.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 8.3, 'Half Leg Squats', '$description', '2 sets of 20 (each side)', 'pictures/squat8')";

mysql_query($q) or DIE("Squat 8.3 not inserted. ".mysql_error());


# Squat level 9 - Assisted One-Leg Squats

$description = "The bottom position of any squatting movement is the hardest part, and this is true most of all for one-leg squats. This exercise will help you tackle the lowest position safely, by allowing your arms to help you through the crucial first few inches. This exercise will strengthen the knee ligaments and tendons, and allow the athlete to approach the Master Step-one-leg squats-with confidence. It will also force the hip flexors to work harder to keep the elevated leg higher than in half-one leg squats, and this may take some getting used to. Invest some training time in this important step.<br><b>Perfecting:</b><br>If you can't reach the beginner standard of this exercise, continue your unilateral training but try pressing off an object higher than the basketball. A chair seat or a low coffee table could be good choices. This will free your arms to provide more support over a longer range of motion than is possible when you use a basketball. Once you master the exercise with a higher object, work with progressively smaller objects until you are ready to try the basketball again.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 9.1, 'Assisted One-Leg Squats', '$description', '1 set of 5 (each side)', 'pictures/squat9')";

mysql_query($q) or DIE("Squat 9.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 9.2, 'Assisted One-Leg Squats', '$description', '2 sets of 10 (each side)', 'pictures/squat9')";

mysql_query($q) or DIE("Squat 9.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 9.3, 'Assisted One-Leg Squats', '$description', '2 sets of 20 (each side)', 'pictures/squat9')";

mysql_query($q) or DIE("Squat 9.3 not inserted. ".mysql_error());


# squat level 10 - One-Leg Squat

$description = "The one-leg squat is the king of all squatting movements-in fact, it is the ultimate lower body exercise, period. It increases strength in the spine, hips, thighs, lower legs and feet, maximizes sta mina and vastly improves athleticism. Over time, this exercise will transform skinny legs into pillars of power, complete with steel cord quads, rock-hard glutes and thick, shapely calves. The master of th is movement will never lose the 'spring' in his legs, and will be protected from all kinds of hip ailments and knee injuries.<br><b>Perfecting:</b><br>If you can 't meet the beginner standard of one-leg squats, return to Step 9 (assisted one-leg squats) and use an object slightly smaller than a basketball-three stacked bricks, for example. Keep using progressively smaller objects to push against until you require no supp ort at all.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 10.1, 'One-Leg Squat', '$description', '1 set of 5 (each side)', 'pictures/squat10')";

mysql_query($q) or DIE("Squat 10.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 10.2, 'One-Leg Squat', '$description', '2 sets of 10 (each side)', 'pictures/squat10')";

mysql_query($q) or DIE("Squat 10.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('squat', 10.3, 'One-Leg Squat', '$description', '2 set of 50 (each side)', 'pictures/squat10')";

mysql_query($q) or DIE("Squat 10.3 not inserted. ".mysql_error());

echo "Squats done!<br>";




## PULLUPS ##

# Pullups level 1 - Vertical Pulls
$description = "Vertical pulls are a very gentle exercise. They are ideal for athletes rebuilding their back and arm strength, particularly following on from a shoulder, biceps or elbow injury. They increase blood flow and re-train the pulling 'groove'. This is also an excellent exercise for any beginner. Its low intensity allows athletes new to pulling to really feel the muscles at work in the shoulders and upper back, before things get too heavy.<br><b>Perfecting:</b>This should be an easy exercise that virtually everybody should be able to do. If you are in rehabilitation from an injury and you find the motion too severe on an involved area (perhaps you have stitches), simply reduce the range of motion, tighten the shoulders, and don't extend your arms as far.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 1.1, 'Vertical Pulls', '$description', '1 set of 10', 'pictures/pullup1')";

mysql_query($q) or DIE("Pullup 1.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 1.2, 'Vertical Pulls', '$description', '2 sets of 20', 'pictures/pullup1')";

mysql_query($q) or DIE("Pullup 1.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 1.3, 'Vertical Pulls', '$description', '3 sets of 40', 'pictures/pullup1')";

mysql_query($q) or DIE("Pullup 1.3 not inserted. ".mysql_error());


# Pullups level 2 - Horizontal Pulls

$description = "Horizontal pulls are similar in theme to vertical pulls, but they place the body at a much more severe angle. As a result, the strength is tested more intensely. This is an excellent intermediate exercise to master before the athlete begins the hanging work on the horizontal bar which follows. This movement conditions the joints, significantly the vulnerable elbows and shoulders.<br><b>Perfecting:</b><br>The higher the object you are pulling up to, the less extreme the angle of the body, and the easier the exercise. If horizontal pulls are just too hard for you at first, try to find something higher than hip height to pull yourself up to . Once you can do thirty reps, try pulling from the hip height base again.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 2.1, 'Horizontal Pulls', '$description', '1 set of 10', 'pictures/pullup2')";

mysql_query($q) or DIE("Pullup 2.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 2.2, 'Horizontal Pulls', '$description', '2 sets of 20', 'pictures/pullup2')";

mysql_query($q) or DIE("Pullup 2.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 2.3, 'Horizontal Pulls', '$description', '3 sets of 30', 'pictures/pullup2')";

mysql_query($q) or DIE("Pullup 2.3 not inserted. ".mysql_error());


#pullup level 3 - Jackknife Pulls

$description = "Jackknife pullups train the athlete in the basic full-range pullup motion, although this exercise is easier than full pullups because the legs take some of the weight and can provide assistance in the bottom position.<br><b>Perfecting:</b><br>The bottom position is the hardest portion of any pullup exercise. If you can't do full-range jackknife pullups, focus on the top position with the arms bent, and gradually add depth to your movement as you gain strength.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 3.1, 'Jackknife Pulls', '$description', '1 set of 10', 'pictures/pullup3')";

mysql_query($q) or DIE("Pullup 3.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 3.2, 'Jackknife Pulls', '$description', '2 sets of 15', 'pictures/pullup3')";

mysql_query($q) or DIE("Pullup 3.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 3.3, 'Jackknife Pulls', '$description', '3 sets of 20', 'pictures/pullup3')";

mysql_query($q) or DIE("Pullup 3.3 not inserted. ".mysql_error());


# pullup level 4 - Half Pullups

$description = "Things are getting serious now. During half pullups, the upper body muscles exclusively move the entire weight of the body-certainly more than the average man can comfortably row or use on pulldowns. As a result the grip is strengthened and the back, biceps and forearms are developed.<br><b>Perfecting:</b><br>This is the first movement in the pullup series where the athlete is expected to move his full bodyweight through space without assistance. Consequently, it proves a sticking point for many trainees, particularly heavier or overweight guys. It's at this point when you need to start losing excess fat, if you have any-and most people do. You can still work on this exercise as you drop weight. If you find it difficult just reduce the range of motion, staying nearer the bar. As your weight decreases, your range of motion will increase.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 4.1, 'Half Pullups', '$description', '1 set of 8', 'pictures/pullup4')";

mysql_query($q) or DIE("Pullup 4.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 4.2, 'Half Pullups', '$description', '2 sets of 11', 'pictures/pullup4')";

mysql_query($q) or DIE("Pullup 4.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 4.3, 'Half Pullups', '$description', '2 sets of 15', 'pictures/pullup4')";

mysql_query($q) or DIE("Pullup 4.3 not inserted. ".mysql_error());


# pullups level 5 - Full Pullups

$description = "The full pullup is the classic muscle and power exercise for the upper back and biceps. The master of this exercise will possess superior functional mobility and athletic strength. The human body evolved to pull itself up well-a man who cannot do pullups cannot be considered to be truly strong.<br><b>Perfecting:</b><br>Full pullups are a heavy calisthenics exercise. If you find them difficult, you are not alone. The key is perseverance. Resist the early urge to 'kip' the body up - this will only ingrain the habit. Instead, help yourself out of the difficult bottom (extended arms) position by placing one foot on a chair and gently pressing down. Use less foot pressure every time you train, until eventually you are only using your foot through the first three or four inches. Eventually you'll be able to do full pullups unassisted.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 5.1, 'Full Pullups', '$description', '1 set of 5', 'pictures/pullup5')";

mysql_query($q) or DIE("Pullup 5.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 5.2, 'Full Pullups', '$description', '2 sets of 8', 'pictures/pullup5')";

mysql_query($q) or DIE("Pullup 5.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 5.3, 'Full Pullups', '$description', '2 sets of 10', 'pictures/pullup5')";

mysql_query($q) or DIE("Pullup 5.3 not inserted. ".mysql_error());


# pullup level 6 - close pullups

$description = "The weakest link in all pullup movements are the arm flexors-the biceps and related upper arm/forearm muscles. If an athlete has mastered two-arm pullups and wishes to progress to the single arm version, he will have to spend time radically strengthening his biceps. This is what close pullups do-bringing the hands nearer together puts the bigger, stronger back muscles at a disadvantage and forces more of the load on the arm flexors. Close pullups will force your biceps to grow larger and more powerful.<br><b>Perfecting:</b><br>Some athletes trained in the full pullup find this exercise difficult, because during close pullups the arms try to pronate (turn inwards) as you pull. Sometimes an overhand grip limits this natural twisting motion. This is a good time to experiment with your grip; try a side on, or underhand grip. Experiment with ring work if you can (seepage 118). Seewhat works for you. If strength is a problem, continue with full pullups, bringing your arms an inch closer every workout or so. Over time, you'll master the close grip.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 6.1, 'Close Pullups', '$description', '1 set of 5', 'pictures/pullup6')";

mysql_query($q) or DIE("Pullup 6.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 6.2, 'Close Pullups', '$description', '2 sets of 8', 'pictures/pullup6')";

mysql_query($q) or DIE("Pullup 6.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 6.3, 'Close Pullups', '$description', '2 sets of 10', 'pictures/pullup6')";

mysql_query($q) or DIE("Pullup 6.3 not inserted. ".mysql_error());


# pullup level 7 - Uneven Pullups

$description = "Uneven pullups go back centuries, but they were made instantly popular again when Sylvester Stallone performed them during the famous training montage of Rocky II. Due to the altered arm position, the arm gripping the bar has to do the majority of the work, preparing the athlete for the true unilateral pullup movements which follow in the series. The lars, biceps and back gain in strength as a result. The grip in particular gets a great workout.<br><b>Perfecting:</b><br>If you are strong enough to do close pullups, you should be able to do uneven pullups. The biggest difference is the fact that you have to hold your bodyweight with just one hand in this step. If you find this tough, devote some time to hanging one-handed after your pullups, to improve your grip.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 7.1, 'Uneven Pullups', '$description', '1 set of 5 (each side)', 'pictures/pullup7')";

mysql_query($q) or DIE("Pullup 7.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 7.2, 'Uneven Pullups', '$description', '2 sets of 7 (each side)', 'pictures/pullup7')";

mysql_query($q) or DIE("Pullup 7.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 7.3, 'Uneven Pullups', '$description', '2 sets of 9 (each side)', 'pictures/pullup7')";

mysql_query($q) or DIE("Pullup 7.3 not inserted. ".mysql_error());


# pullup level 8 - Half One-Arm Pullups

$description = "This is the first step in the series where the student pulls his total bodyweight with one hand. As well as teaching the balance and technical groove required for full one-arm pullups, it develops huge biceps and back power and builds big arms. It doesn't train the muscles in the stretched position though, so add a full-range motion such as uneven pullups or close pullups afterwards.<br><b>Perfecting:</b><br>The lower you descend, the harder pullups are. If you can't quite manage half one-arm pullups yet, focus on the top range of the motion, nearest the bar. Over time, add depth inch by inch until you can do this step properly.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 8.1, 'Half One-Arm Pullups', '$description', '1 set of 4 (each side)', 'pictures/pullup8')";

mysql_query($q) or DIE("Pullup 8.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 8.2, 'Half One-Arm Pullups', '$description', '2 sets of 6 (each side)', 'pictures/pullup8')";

mysql_query($q) or DIE("Pullup 8.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 8.3, 'Half One-Arm Pullups', '$description', '2 sets of 8 (each side)', 'pictures/pullup8')";

mysql_query($q) or DIE("Pullup 8.3 not inserted. ".mysql_error());


# Pullup level 9 - Assisted One-Arm Pullups

$description = "Assisted pullups are a specialized exercise. Their specific function is to help an advanced student 'feel out' one-arm pullups, without getting stuck in the lowest position. This exercise slowly and safely builds the enormous levels of tendon strength required to correctly execute true one-arm pullups.<br><b>Perfection:</b><br>The further your hand is down the towel or rope you use, the harder it is to provide assistance. If you have trouble getting five reps on this exercise, hold the towel nearer up to the bar. As you get stronger, hold the towel lower down. Eventually you will feel you are pushing down on the towel, rather than pulling. This is a great way to advance on assisted one-arm pullups and eventually prepare yourself for the Master Step-one-arm pullups.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 9.1, 'Assisted One-Arm Pullups', '$description', '1 set of 3 (each side)', 'pictures/pullup9')";

mysql_query($q) or DIE("Pullup 9.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 9.2, 'Assisted One-Arm Pullups', '$description', '2 sets of 5 (each side)', 'pictures/pullup9')";

mysql_query($q) or DIE("Pullup 9.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 9.3, 'Assisted One-Arm Pullups', '$description', '2 sets of 7 (each side)', 'pictures/pullup9')";

mysql_query($q) or DIE("Pullup 9.3 not inserted. ".mysql_error());


# pullup level 10 - One-Arm Pullup

$description = "One-arm pullups, performed deeply and without 'kipping' are the greatest back and arm exercise possible. They confer mighty strength and size. The master of this exercise will earn lats that look like wings and his upper back will be sprouting muscles like coiled pythons. Plus, he'll own a grip, arms and forearms vastly more powerful than the average gym rat-in fact he could probably rip a bodybuilder's arm off in an arm wrestling match.<br><b>Perfecting:</b><br>This is one hell of a hard technique, and although you can master it with dedication and effort, don't expect to do it overnight! Really take your time to milk the preliminary nine steps first. Initially, aim for just a single good rep, and practice consolidation training when you manage it (see page 268).";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 10.1, 'One-Arm Pullups', '$description', '1 set of 1 (each side)', 'pictures/pullup10')";

mysql_query($q) or DIE("Pullup 10.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 10.2, 'One-Arm Pullups', '$description', '2 sets of 3 (each side)', 'pictures/pullup10')";

mysql_query($q) or DIE("Pullup 10.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('pullup', 10.3, 'One-Arm Pullups', '$description', '2 set of 6 (each side)', 'pictures/pullup10')";

mysql_query($q) or DIE("Pullup 10.3 not inserted. ".mysql_error());

echo "Pullups done!<br>";



## LEG RAISES ##

# Leg Raises level 1 - Knee Tucks
$description = "Knee tucks are an ideal midsection exercise for beginners. They cultivate good spinal posture, condition the abdominal muscles and strengthen the hip flexors. They are also relatively easy for most people and for this reason they present a great opportunity to start developing perfect technique for all your midsection exercises. Important elements to remember include smooth motion, correct breathing rhythm and keeping the stomach held in tightly.<br><b>Perfecting:</b><br>This exercise is equally hard in the start position-where the legs are stretched out-and in the finish position-where the knees are pulled towards the chest. To make the exercise a little easier, focus on a shorter range of motion between these two extremes. As your waist becomes stronger, gradually lengthen the range of motion until your form is perfect.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 1.1, 'Knee Tucks', '$description', '1 set of 10', 'pictures/leg raise1')";

mysql_query($q) or DIE("Leg Raise 1.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 1.2, 'Knee Tucks', '$description', '2 sets of 25', 'pictures/leg raise1')";

mysql_query($q) or DIE("Leg Raise 1.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 1.3, 'Knee Tucks', '$description', '3 sets of 40', 'pictures/leg raise1')";

mysql_query($q) or DIE("Leg Raise 1.3 not inserted. ".mysql_error());


# Leg Raises level 2 - Flat Knee Raises

$description = "This exercise continues where knee tucks leaves off, further strengthening the waist. Flat knee raises train the spinal muscles, abdominal muscles, obliques and transversus to function in a coordinated way. The muscles of the frontal thigh are also toned. The position on the floor requires increased hip flexor involvement, which will condition the athlete for the more intense floor and
hanging exercises which come later in the leg raise series.<br><b>Perfecting:</b><br>One of the hardest elements of this exercise is keeping the feet off the floor with the legs outstretched. If this is causing you trouble, return your feet to the floor between repetitions. When you gain the strength to do reps while continuously keeping your feet off the floor, do so-even if it's only two repetitions-then as you tire complete the set by resting your feet on the floor between reps. Over time keep gradually adding reps with your feet clear of the floor.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 2.1, 'Flat Knee Raises', '$description', '1 set of 10', 'pictures/leg raise2')";

mysql_query($q) or DIE("Leg Raise 2.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 2.2, 'Flat Knee Raises', '$description', '2 sets of 20', 'pictures/leg raise2')";

mysql_query($q) or DIE("Leg Raise 2.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 2.3, 'Flat Knee Raises', '$description', '3 sets of 35', 'pictures/leg raise2')";

mysql_query($q) or DIE("Leg Raise 2.3 not inserted. ".mysql_error());


#leg raise level 3 - Flat Bent Leg Raises

$description = "The flat bent leg raise is a very simple continuation of the flat knee raise. Extending the knees places the feet farther away from the body, making the exercise harder due to leverage. This increases the stress on the hips and all the muscles of the waist and abdomen, building more strength and tone.<br><b>Perfecting:</b><br>Flat knee raises involve a ninety degree knee bend. Flat bent leg raises require a forty-five degree knee bend. The less the degree of bend, the greater the amount of leverage and the harder the exercise becomes. If you cannot meet the beginner standard, use more of a knee bend-a little less than ninety degrees. As you get stronger, start straightening your legs little by little, until you meet the forty-five degree criterion.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 3.1, 'Flat Bent Leg Raises', '$description', '1 set of 10', 'pictures/leg raise3')";

mysql_query($q) or DIE("Leg Raise 3.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 3.2, 'Flat Bent Leg Raises', '$description', '2 sets of 15', 'pictures/leg raise3')";

mysql_query($q) or DIE("Leg Raise 3.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 3.3, 'Flat Bent Leg Raises', '$description', '3 sets of 20', 'pictures/leg raise3')";

mysql_query($q) or DIE("Leg Raise 3.3 not inserted. ".mysql_error());


# leg raise level 4 - Flat Frog Raises

$description = "Whether they are performed in a flat or hanging position, the jump from bent knee raises to straight legraises is a pretty big one because of the increase in flexible strength required. Frog raise techniques help athlete make this jump. They act as an ideal intermediary between bent knee raise and straight leg raise movements because they develop both strength and flexibility in the areas required, the hamstrings and back. Unfortunately frog raise movements are not very well known to the training public. They seemed to get lost after the sixties when leg raises became less popular and crunches took over.<br><b>Perfecting:</b><br>If you find this exercise difficult, focus your workouts on the top range-around the frog extension technique where the legs are up in the air. As you become stronger over time, slowly add depth until you are doing full reps.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 4.1, 'Flat Frog Raises', '$description', '1 set of 8', 'pictures/leg raise4')";

mysql_query($q) or DIE("Leg Raise 4.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 4.2, 'Flat Frog Raises', '$description', '2 sets of 15', 'pictures/leg raise4')";

mysql_query($q) or DIE("Leg Raise 4.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 4.3, 'Flat Frog Raises', '$description', '3 sets of 25', 'pictures/leg raise4')";

mysql_query($q) or DIE("Leg Raise 4.3 not inserted. ".mysql_error());


# leg raises level 5 - Flat Straight Leg Raises

$description = "This exercise is a favorite in military training camps and martial arts schools alike, because it increases stomach and hip power and stamina, while promoting function and flexibility at the same time. It is deceptively easy, however; just bending the knees a fraction and 'bouncing' the feet off the floor makes the exercise much easier. Unfortunately it also makes the exercise far less productive in terms of pure strength and conditioning.<br><b>Perfecting:</b><br>This exercise can be made a lot easier by bending the knees; but that's not an advisable shortcut because the major benefits of this exercise come from the fact that the legs are straight. If you can't meet the beginner standard, go back to flat frog raises (Step 4) and build up to 3 sets of 30 reps before trying again. If you still have problems, keep the legs straight but focus on shorter, top range reps and acquire more depth whenever you are able to.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 5.1, 'Flat Straight Leg Raises', '$description', '1 set of 5', 'pictures/leg raise5')";

mysql_query($q) or DIE("Leg Raise 5.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 5.2, 'Flat Straight Leg Raises', '$description', '2 sets of 10', 'pictures/leg raise5')";

mysql_query($q) or DIE("Leg Raise 5.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 5.3, 'Flat Straight Leg Raises', '$description', '2 sets of 20', 'pictures/leg raise5')";

mysql_query($q) or DIE("Leg Raise 5.3 not inserted. ".mysql_error());


# leg raise level 6 - Hanging Knee Raises

$description = "With this step, the athlete begins the harder hanging movements of the midsection series. While on the floor, the athlete was only partially fighting the forces of gravity; now he has to overcome gravity fully. The increased intensity amplifies hip and midsection strength radically, in a short space of time. In addition the bar hang element increases the activity of the important ribcage muscles (the serratus and intercostals) which function as intermediaries between the arms and abdomen. For this reason hanging ab work is vastly superior to ab work on parallel bars or similar devices.<br><b>Perfecting:</b><br>If you can't handle at least five good, strict reps of this exercise, reduce your range of motion. Focus on the top portion where the knees are in the finish position, and gradually add depth over time. Whatever you do, resist the urge to use momentum. Using smooth, controlled motions early on in the series will build a base of muscle and tendon strength which will prove invaluable if you wish to master later steps. Momentum won't help.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 6.1, 'Hanging Knee Raises', '$description', '1 set of 5', 'pictures/leg raise6')";

mysql_query($q) or DIE("Leg Raise 6.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 6.2, 'Hanging Knee Raises', '$description', '2 sets of 10', 'pictures/leg raise6')";

mysql_query($q) or DIE("Leg Raise 6.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 6.3, 'Hanging Knee Raises', '$description', '2 sets of 15', 'pictures/leg raise6')";

mysql_query($q) or DIE("Leg Raise 6.3 not inserted. ".mysql_error());


# leg raise level 7 - Hanging Bent Leg Raises

$description = "Hanging bent leg raises are a harder extension of hanging knee raises. In hanging knee raises, the knees are bent at ninety degrees, in hanging bent leg raises they are at forty-five. The increased leverage this provides makes the exercise the hardest in the series yet, and it develops the midsection accordingly. The abdomen, waist, serratus and hip flexors all get stronger.<br><b>Perfecting:</b><br>At first , you may find it difficult to keep your knees 'locked' at the correct angle throughout the motion. There will be a tendency to straighten the legs out a little as you lower them. Try to avoid this, because resetting the correct angle as the legs are raised tends to impart momentum which leads to a swinging motion. If you have trouble with the exercise from the start, simply increase the angle of the knee bend from forty-five degrees to closer to ninety degrees. As you gain strength from workout to workout, gradually extend the legs until you meet your goal of forty-five degrees.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 7.1, 'Hanging Bent Leg Raises', '$description', '1 set of 5 (each side)', 'pictures/leg raise7')";

mysql_query($q) or DIE("Leg Raise 7.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 7.2, 'Hanging Bent Leg Raises', '$description', '2 sets of 10 (each side)', 'pictures/leg raise7')";

mysql_query($q) or DIE("Leg Raise 7.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 7.3, 'Hanging Bent Leg Raises', '$description', '2 sets of 15 (each side)', 'pictures/leg raise7')";

mysql_query($q) or DIE("Leg Raise 7.3 not inserted. ".mysql_error());


# leg raise level 8 - Hanging Frog Raises

$description = "Hanging frog raises emphasize the fact that the finish position and negative (downwards) phase of leg raises are easier in terms of mechanics and leverage than the start position and positive (upwards) phase. By working hard with this exercise you can increase your strength and flexibility faster than would normally be possible, allowing you to more easily make the transition to straight leg variants of the leg raise (Steps 9 and 10).<br><b>Perfecting:</b><br>If you can meet the progression standard for hanging bent leg raises, five reps of hanging frog raises should be well within your capabilities. When students have difficulty moving from bent leg raises to frog-type movements, the issue is usually lack of flexibility rather than strength. This can be easily cured by bending forwards and stretching out the lower back and hamstrings for a few minutes before attempting this exercise.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 8.1, 'Hanging Frog Raises', '$description', '1 set of 5 (each side)', 'pictures/leg raise8')";

mysql_query($q) or DIE("Leg Raise 8.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 8.2, 'Hanging Frog Raises', '$description', '2 sets of 10 (each side)', 'pictures/leg raise8')";

mysql_query($q) or DIE("Leg Raise 8.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 8.3, 'Hanging Frog Raises', '$description', '2 sets of 15 (each side)', 'pictures/leg raise8')";

mysql_query($q) or DIE("Leg Raise 8.3 not inserted. ".mysql_error());


# Leg Raise level 9 - Partial Straight Leg Raises

$description = "Straight legraises, performed with locked knees and without momentum are an incredibly hard exercise-only perhaps one in five hundred serious trainees (maybe less) can execute them. One of the things that makes them so hard is the full range of motion-from the body straight all the way up to the jackknife right angle position. Once the athlete has developed the strength and flexibility required to perform the legs extended top position (as a result of hanging frog raises), hanging partial straight leg raises capitalize on this, by making the top position a little harder, and eliminating the rest.<br><b>Perfection:</b><br>If you have met the progression standard for hanging frog raises, this means you will be able to hold the advanced legs extended position of the leg raise. If you find that partial straight leg raises are too hard, it must be because the range of motion is still too great for your strength levels. Focus on doing this exercise near the legs extended finish position, moving your legs down and back up, even if you can only move a few inches at first. Over time, your strength will increase and you'll be able to move your legs down to the full forty-five degree position and back up again.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 9.1, 'Partial Straight Leg Raises', '$description', '1 set of 5 (each side)', 'pictures/leg raise9')";

mysql_query($q) or DIE("Leg Raise 9.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 9.2, 'Partial Straight Leg Raises', '$description', '2 sets of 10 (each side)', 'pictures/leg raise9')";

mysql_query($q) or DIE("Leg Raise 9.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 9.3, 'Partial Straight Leg Raises', '$description', '2 sets of 15 (each side)', 'pictures/leg raise9')";

mysql_query($q) or DIE("Leg Raise 9.3 not inserted. ".mysql_error());


# leg raise level 10 - Hanging Straight Leg Raise

$description = "Hanging straight leg raises-performed strictly, according to the protocols given above-are the greatest all-round midsection exercise in existence. They blow crunches, machine work, and weighted sit-ups out of the water. By the time you can execute even twenty perfect reps of this exercise, your waist will be powerful and flexible, your obliques, serratus, transversus and intercostals will be carved out of solid rock and your abdominal muscles will be like plate steel. You will have a six-pack from hell!<br><b>Perfecting:</b><br>When you begin hanging straight leg raises, you should have already mastered hanging partial straight leg raises. If you haven't, go back and do so. If you have mastered the partial version, all you need to do is slowly increase your depth of motion from workout to workout-even by a fraction of an inch-and you'll be able to pull off this exercise before you know it.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 10.1, 'Hanging Straight Leg Raise', '$description', '1 set of 5 (each side)', 'pictures/leg raise10')";

mysql_query($q) or DIE("Leg Raise 10.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 10.2, 'Hanging Straight Leg Raise', '$description', '2 sets of 10 (each side)', 'pictures/leg raise10')";

mysql_query($q) or DIE("Leg Raise 10.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('legraise', 10.3, 'Hanging Straight Leg Raise', '$description', '2 sets of 30 (each side)', 'pictures/leg raise10')";

mysql_query($q) or DIE("Leg Raise 10.3 not inserted. ".mysql_error());

echo "Leg raises done!<br>";


## BRIDGES ##

# Bridges level 1 - Short Bridges
$description = "Short bridges involve pushing through the lower limbs, and are the gentlest way to begin spinal training because in everyday life we usually activate the spinal muscles via the legs. We do this simply by moving around, bending down, etc. The act of keeping the trunk straight at the top of the short bridging movement stimulates the spine and hip muscles with hardly any pressure running through the vertebrae. As a result this exercise is wonderful therapy for those who have suffered disc injuries.<br><b>Perfecting:</b><br>Most people should be able to do sho~ridges without much difficulty. If you are recovering from a back injury and this exercise poses/a problem, simply reduce the range of motion by performing the technique with a few pillows or cushions under the hips.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 1.1, 'Short Bridges', '$description', '1 set of 10', 'pictures/bridge1')";

mysql_query($q) or DIE("Bridge 1.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 1.2, 'Short Bridges', '$description', '2 sets of 25', 'pictures/bridge1')";

mysql_query($q) or DIE("Bridge 1.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 1.3, 'Short Bridges', '$description', '3 sets of 50', 'pictures/bridge1')";

mysql_query($q) or DIE("Bridge 1.3 not inserted. ".mysql_error());


# Bridges level 2 - Straight Bridges

$description = "Short bridges require you to activate the spinal muscles mainly by pushing through the legs; straight bridges require pressure through the arms also. It's this factor, combined with the elongated body position, that makes straight bridges slightly more difficult. The movement not only tones the arms, it also loosens the torso and strengthens the muscles between the shoulder blades that are crucial for performing harder versions of the bridge.<br><b>Perfecting:</b><br>If the straight bridge described is too difficult, you can make the exercise easier by reducing the leverage. Instead of performing the technique with the legs straight, do it with the legs bent, as they are in short bridges (fig. 84). If this is still too difficult, simply perform the exercise kneeling down, leaning back and pressing the buttocks a few inches up and away from the calves. Continue using this partial motion until you get strong enough to try again.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 2.1, 'Straight Bridges', '$description', '1 set of 10', 'pictures/bridge2')";

mysql_query($q) or DIE("Bridge 2.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 2.2, 'Straight Bridges', '$description', '2 sets of 20', 'pictures/bridge2')";

mysql_query($q) or DIE("Bridge 2.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 2.3, 'Straight Bridges', '$description', '3 sets of 40', 'pictures/bridge2')";

mysql_query($q) or DIE("Bridge 2.3 not inserted. ".mysql_error());


#bridge level 3 - Angled Bridges

$description = "Angled bridges are the first exercise in the bridging series to utilize the full 'hands alongside head' position used in advanced bridging . This position will strengthen the wrists and open up the shoulders and chest in preparation for later exercises. This motion also requires greater flexibility
and contractile strength in the upper spine than the earlier steps.<br><b>Perfecting:</b><br>Bridging is easier the shallower the angle-i.e., the higher your head and hands are. If an angled bridge off a bunk is too hard, try it against something higher-maybe a table or desk-until you can manage the lower surface.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 3.1, 'Angled Bridges', '$description', '1 set of 8', 'pictures/bridge3')";

mysql_query($q) or DIE("Bridge 3.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 3.2, 'Angled Bridges', '$description', '2 sets of 15', 'pictures/bridge3')";

mysql_query($q) or DIE("Bridge 3.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 3.3, 'Angled Bridges', '$description', '3 sets of 30', 'pictures/bridge3')";

mysql_query($q) or DIE("Bridge 3.3 not inserted. ".mysql_error());


# bridge level 4 - Head Bridges

$description = "Unlike yoga, which trains the back with static holds, old school calisthenics focuses on dynamic (or moving) strength. This short-range technique is only a preliminary step towards learning complete bridging movements.<br><b>Perfecting:</b><br>If you have some difficulty getting into the initial bridge hold, begin by lying with something under the small of your back-two or three cushions or pillows should do the trick. If you can't touch your head to the floor, just use a shorter range of motion and go lower from workout to workout.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 4.1, 'Head Bridges', '$description', '1 set of 8', 'pictures/bridge4')";

mysql_query($q) or DIE("Bridge 4.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 4.2, 'Head Bridges', '$description', '2 sets of 15', 'pictures/bridge4')";

mysql_query($q) or DIE("Bridge 4.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 4.3, 'Head Bridges', '$description', '2 sets of 25', 'pictures/bridge4')";

mysql_query($q) or DIE("Bridge 4.3 not inserted. ".mysql_error());


# bridges level 5 - Half Bridges

$description = "This movement constitutes the top half of the range of Step 6, the full bridge. By the time you can perform this motion for the reps listed under the progression standard, your spinal muscles will be powerful and lithe enough to start including the more difficult lower half of the bridging
movement.<br><b>Perfecting:</b><br>As with most bridging movements, if you have trouble performing the reps as described, start shallow and build up your range of motion over time.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 5.1, 'Half Bridges', '$description', '1 set of 8', 'pictures/bridge5')";

mysql_query($q) or DIE("Bridge 5.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 5.2, 'Half Bridges', '$description', '2 sets of 15', 'pictures/bridge5')";

mysql_query($q) or DIE("Bridge 5.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 5.3, 'Half Bridges', '$description', '2 sets of 20', 'pictures/bridge5')";

mysql_query($q) or DIE("Bridge 5.3 not inserted. ".mysql_error());


# bridge level 6 - Full Bridge

$description = "The full bridge is a phenomenal exercise. As well as preventing and curing many back problems, it increases total-body flexibility, adds power to the deep muscles of the spine, expands the ribcage, limbers up the shoulders, tones the arms and legs, improves circulation and even aids the digestion.<br><b>Perfecting:</b><br>Attaining the ideal bridge-particularly the full extension of the arms and legs-is difficult and requires patient practice. When you begin, simply push your body as high as you can. Perfection will come with time.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 6.1, 'Full Bridge', '$description', '1 set of 6', 'pictures/bridge6')";

mysql_query($q) or DIE("Bridge 6.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 6.2, 'Full Bridge', '$description', '2 sets of 10', 'pictures/bridge6')";

mysql_query($q) or DIE("Bridge 6.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 6.3, 'Full Bridge', '$description', '2 sets of 15', 'pictures/bridge6')";

mysql_query($q) or DIE("Bridge 6.3 not inserted. ".mysql_error());


# bridge level 7 - Wall Walking Bridges (Down)

$description = "Walking down the wall is easier than walking up it. Master this step first.<br><b>Perfecting:</b><br>Very few people manage to walk fully down the wall their first time. Just try to go lower every time you train. Smaller 'steps' will make things easier.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 7.1, 'Wall Walking Bridges (Down)', '$description', '1 set of 3', 'pictures/bridge7')";

mysql_query($q) or DIE("Bridge 7.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 7.2, 'Wall Walking Bridges (Down)', '$description', '2 sets of 6', 'pictures/bridge7')";

mysql_query($q) or DIE("Bridge 7.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 7.3, 'Wall Walking Bridges (Down)', '$description', '2 sets of 10', 'pictures/bridge7')";

mysql_query($q) or DIE("Bridge 7.3 not inserted. ".mysql_error());


# bridge level 8 - Wall Walking Bridges (Up)

$description = "Once you have the flexibility and strength to walk down a wall, it's time to master this step and walk upwards. This doesn't require any extra flexibility, but it does require extra strength because you are moving against gravity.<br><b>Perfecting:</b><br>As with Step 7, the key to perfecting this exercise lies in progressively increasing range of motion. When you first try it, only go down the wall to a point where you are sure you can hand walk back up. Mark this level with a piece of chalk if it helps. Simply increase the depth over time.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 8.1, 'Wall Walking Bridges (Up)', '$description', '1 set of 2', 'pictures/bridge8')";

mysql_query($q) or DIE("Bridge 8.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 8.2, 'Wall Walking Bridges (Up)', '$description', '2 sets of 4', 'pictures/bridge8')";

mysql_query($q) or DIE("Bridge 8.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 8.3, 'Wall Walking Bridges (Up)', '$description', '2 sets of 8', 'pictures/bridge8')";

mysql_query($q) or DIE("Bridge 8.3 not inserted. ".mysql_error());


# Bridge level 9 - Closing Bridges

$description = "This movement is the hardest bridging technique so far. It comprises the 'eccentric' or negative phase of the Master Step, stand-to-stand bridges.<br><b>Perfection:</b><br>At first, you will probably fall backwards over the last third of the movement, landing on the palms if you are lucky. This is unacceptable-you must continue practicing until you can gently place your palms on the floor. One trick that can help is reaching back onto stairs . Reach back onto lower steps each time you train until you are placing your palms on the ground.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 9.1, 'Closing Bridges', '$description', '1 set of 1', 'pictures/bridge9')";

mysql_query($q) or DIE("Bridge 9.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 9.2, 'Closing Bridges', '$description', '2 sets of 3', 'pictures/bridge9')";

mysql_query($q) or DIE("Bridge 9.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 9.3, 'Closing Bridges', '$description', '2 sets of 6', 'pictures/bridge9')";

mysql_query($q) or DIE("Bridge 9.3 not inserted. ".mysql_error());


# bridge level 10 - Stand-to-Stand Bridges

$description = "This is the ultimate bridging technique of the series. It requires incredible flexibility, strong joints, powerful muscles, balance and coordination. When performed regularly, stand-to-stand bridges increase agility, massage the internal organs, align the spine and muscular system and increase energy. When worked for high repetitions, they supercharge the metabolism.<br><b>Perfecting:</b><br>Just as with closing bridges (Step 9), you can use stairs to increase your depth in this movement over time. Employing a very wide foot position will also be of help. Strive to use a shoulder width stance eventually, however.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 10.1, 'Stand-to-Stand Bridges', '$description', '1 set of 1', 'pictures/bridge10')";

mysql_query($q) or DIE("Bridge 10.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 10.2, 'Stand-to-Stand Bridges', '$description', '2 sets of 3', 'pictures/bridge10')";

mysql_query($q) or DIE("Bridge 10.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('bridge', 10.3, 'Stand-to-Stand Bridges', '$description', '2 sets of 10-30', 'pictures/bridge10')";

mysql_query($q) or DIE("Bridge 10.3 not inserted. ".mysql_error());

echo "Bridges done!<br>";



## HANDSTANDS ##

# Handstands level 1 - Wall Headstands
$description = "For anybody who wishes to approach the handstand pushup, the first specific skill which must be mastered is the inverse position-being upside-down. Wall headstands are the perfect introduction to this skill. With just a small amount of practice, the blood vessels and organs of the torso and head become accustomed to the sudden reversal of gravity. During headstands, the entire body is above the head, which means that the balance is tested. The shoulders also receive some work as stabilizers.<br><b>Perfecting:</b><br>Most people can stay in the wall headstand for a few seconds-the major problem is getting up there in the first place! The difficulty is in learning the right level of pushinglkicking strength required to find the wall. If you find this difficult, ask a friend to help guide your legs up until you get it.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 1.1, 'Wall Headstands', '$description', '30 seconds', 'pictures/handstand1')";

mysql_query($q) or DIE("Handstand 1.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 1.2, 'Wall Headstands', '$description', '1 minute', 'pictures/handstand1')";

mysql_query($q) or DIE("Handstand 1.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 1.3, 'Wall Headstands', '$description', '2 minutes', 'pictures/handstand1')";

mysql_query($q) or DIE("Handstand 1.3 not inserted. ".mysql_error());


# Handstands level 2 - Crow Stands

$description = "Crow stands will teach you to combine arm and shoulder strength with balance. They are an essential step in moving towards handstand pushups because you are supporting the entire bodyweight by balancing with the arms. The first step will have helped you become comfortable in balancing upside down. This posture will take you further by helping you develop basic 'stabilizer' strength in your shoulders, wrists and fingers. Since this is not an inverse posture, always follow this exercise with wall headstands to combine the full effect of both strength-building and inverse balancing.<br><b>Perfecting:</b><br>The key to this technique is appreciating the unique leverage point. The art to holding the balance in this exercise-as with more advanced hand-balancing exercises-lies in the use of sensitive finger strength to stop you from tipping forwards. If you start falling forwards, press hard with your fingers. Lift the legs nice and high to prevent yourself falling backwards.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 2.1, 'Crow Stands', '$description', '10 seconds', 'pictures/handstand2')";

mysql_query($q) or DIE("Handstand 2.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 2.2, 'Crow Stands', '$description', '30 seconds', 'pictures/handstand2')";

mysql_query($q) or DIE("Handstand 2.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 2.3, 'Crow Stands', '$description', '1 minute', 'pictures/handstand2')";

mysql_query($q) or DIE("Handstand 2.3 not inserted. ".mysql_error());


#handstand level 3 - Wall Handstands

$description = "Wall headstands will have taught you to get used to being upside-down. Crow stands will have given you the arm and wrist strength to safely balance your entire bodyweight through your hands. Once you have mastered these postures, the next thing you need to learn is the art of kicking up into a full handstand against the wall, which is somewhat more difficult than kicking up into a headstand due to the extension of the arms. Wall handstands will teach you this important skill. It also increases basic shoulder strength.<br><b>Perfecting:</b><br>If you have been practicing the kick up into a wall headstand (Step 1), this technique shouldn't be too difficult. You do have to kick harder, however. If this is too tricky at first, try kicking off something, like a box or a chair.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 3.1, 'Wall Handstands', '$description', '30 seconds', 'pictures/handstand3')";

mysql_query($q) or DIE("Handstand 3.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 3.2, 'Wall Handstands', '$description', '1 minute', 'pictures/handstand3')";

mysql_query($q) or DIE("Handstand 3.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 3.3, 'Wall Handstands', '$description', '2 minutes', 'pictures/handstand3')";

mysql_query($q) or DIE("Handstand 3.3 not inserted. ".mysql_error());


# handstand level 4 - Half Handstand Pushups

$description = "Your shoulders, arms and torso will have gained some strength simply by holding the static posture of wallhandstands (Step 3). This exercise is much more intense. It will add muscle and heft to the entire shoulder girdle, and help build powerful elbows and thick triceps. The upper pectorals also benefit.<br><b>Perfecting:</b><br>Previous steps will have taught you how to kick up into a handstand against the wall without a problem. The movement required in half handstand pushups requires significant upper body strength, however. If the technique described above is too strenuous, simply reduce your range of motion. Begin by bending your arms and shoulders a short way---even if only a fraction of an inch. Build up your repetitions, and gradually add depth over time until your head reaches halfway towards the ground. You'll get there, given time.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 4.1, 'Half Handstand Pushups', '$description', '1 set of 5', 'pictures/handstand4')";

mysql_query($q) or DIE("Handstand 4.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 4.2, 'Half Handstand Pushups', '$description', '2 sets of 10', 'pictures/handstand4')";

mysql_query($q) or DIE("Handstand 4.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 4.3, 'Half Handstand Pushups', '$description', '2 sets of 20', 'pictures/handstand4')";

mysql_query($q) or DIE("Handstand 4.3 not inserted. ".mysql_error());


# handstands level 5 - Handstand Pushups

$description = "This is the full Convict Conditioning handstand pushup, which develops and strengthens the shoulders, triceps , elbows, trapezius, pectorals and hands-in fact it has a power-building effect on the entire upper body. A lot of athletes feel the handstand pushup should be free-that is, clear of the wall. But this is a test of balance as much as strength. All the old school hand-balancers believed that if you want balance, you should build strength first.<br><b>Perfecting:</b><br>The bottom position is the most difficult due to leverage. If you can't do five full reps, don't go all the way down at first. Add depth as you get stronger.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 5.1, 'Handstand Pushups', '$description', '1 set of 5', 'pictures/handstand5')";

mysql_query($q) or DIE("Handstand 5.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 5.2, 'Handstand Pushups', '$description', '2 sets of 10', 'pictures/handstand5')";

mysql_query($q) or DIE("Handstand 5.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 5.3, 'Handstand Pushups', '$description', '2 sets of 15', 'pictures/handstand5')";

mysql_query($q) or DIE("Handstand 5.3 not inserted. ".mysql_error());


# handstand level 6 - Close Handstand Pushups

$description = "The full handstand pushup is an excellent basic exercise. It will teach you to use your strongest pressing muscles powerfully and with coordination. But if you want to move to very advanced unilateral handstand work you will need extremely powerful tendons, particularly around the elbows, forearms and wrists. Close handstand pushups develop that tendon strength. The close hand position makes it more difficult for the shoulder girdle to contribute to the movement, which in turn forces the elbows to become much stronger.<br><b>Perfecting:</b><br>If you are strong enough you can usually jump from the progression standard of a step straight to the beginner standard of the next step without too many problems. In moving from handstand pushups to close handstand pushups however it's best to take things slowly to allow the tendons to properly adapt to the full bodyweight. Once you have mastered the handstand pushup, gradually move your hands an inch closer every time you workout, or whenever you feel able to. Use floor markings if it helps. If your handstand pushup hand position is about eighteen inches apart, you should take eighteen weeks minimum to get to this step-more if you need it.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 6.1, 'Close Handstand Pushups', '$description', '1 set of 5', 'pictures/handstand6')";

mysql_query($q) or DIE("Handstand 6.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 6.2, 'Close Handstand Pushups', '$description', '2 sets of 9', 'pictures/handstand6')";

mysql_query($q) or DIE("Handstand 6.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 6.3, 'Close Handstand Pushups', '$description', '2 sets of 12', 'pictures/handstand6')";

mysql_query($q) or DIE("Handstand 6.3 not inserted. ".mysql_error());


# handstand level 7 - Uneven Handstand Pushups

$description = "In order to press yourself up, the basketball must be stabilized-it will tend to shoot outwards if not isometrically controlled. This will require huge arm and shoulder power, as well as Olympian rotator cuff muscles. The master of this exercise will earn shoulders like a gorilla and
super-tough joints.<br><b>Perfecting:</b><br>Using the ball requires a high degree of strength and balance, combined with quick reflexes. I would advise all athletes to begin this exercise using stable objects rather than a ball. Perhaps start with a flat brick and over build up to using three stacked flat, or a cinder block. In the pen a lot of guys use slim books in a pile, adding a book whenever they can. When the pile is as high as a basketball, then experiment with a basketball. Always play it safe!";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 7.1, 'Uneven Handstand Pushups', '$description', '1 set of 5 (each side)', 'pictures/handstand7')";

mysql_query($q) or DIE("Handstand 7.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 7.2, 'Uneven Handstand Pushups', '$description', '2 sets of 8 (each side)', 'pictures/handstand7')";

mysql_query($q) or DIE("Handstand 7.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 7.3, 'Uneven Handstand Pushups', '$description', '2 sets of 10 (each side)', 'pictures/handstand7')";

mysql_query($q) or DIE("Handstand 7.3 not inserted. ".mysql_error());


# handstand level 8 - Half One-Arm Handstand Pushups

$description = "This is the first technique in the series where you are pressing your entire bodyweight up with just one arm. This requires not only massive muscular strength in the shoulders and arms but extremely strong joints, total body coordination, excellent balance and an expert familiarity with inverse
pressing techniques. To benefit from the half one-arm handstand pushupit's essential that you have invested a lot of time milking the earlier exercises for all they are worth-for at least six months, maybe even longer. Don't even attempt it otherwise, or you are only likely to injure yourself.<br><b>Perfecting:</b><br>This is a hard exercise which can only be gradually mastered by increasing your range of motion over time. Trying to push the weight though the palm rather than the fingers will help align the pressing muscles properly.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 8.1, 'Half One-Arm Handstand Pushups', '$description', '1 set of 4 (each side)', 'pictures/handstand8')";

mysql_query($q) or DIE("Handstand 8.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 8.2, 'Half One-Arm Handstand Pushups', '$description', '2 sets of 2 (each side)', 'pictures/handstand8')";

mysql_query($q) or DIE("Handstand 8.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 8.3, 'Half One-Arm Handstand Pushups', '$description', '2 sets of 8 (each side', 'pictures/handstand8')";

mysql_query($q) or DIE("Handstand 8.3 not inserted. ".mysql_error());


# Handstand level 9 - Lever Handstand Pushups

$description = "This advanced exercise perfectly picks up where half one-arm handstand pushups leave off. The last step will have trained you to complete the top half of the motion, and lever handstand pushups help you master the more challenging bottom half. The position of the upturned hand makes it tough to apply much force with the assisting arm, ensuring you have just enough help to get you out of the bottom position with maximum muscular benefit.<br><b>Perfection:</b><br>Bending the assisting (i.e., palm up) arm and bringing it closer to the body will allow you to apply greater leverage. Extend the arm as you get stronger.";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 9.1, 'Lever Handstand Pushups', '$description', '1 set of 3 (each side)', 'pictures/handstand9')";

mysql_query($q) or DIE("Handstand 9.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 9.2, 'Lever Handstand Pushups', '$description', '2 sets of 4 (each side)', 'pictures/handstand9')";

mysql_query($q) or DIE("Handstand 9.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 9.3, 'Lever Handstand Pushups', '$description', '2 sets of 6 (each side)', 'pictures/handstand9')";

mysql_query($q) or DIE("Handstand 9.3 not inserted. ".mysql_error());


# handstand level 10 - One-Arm Handstand Pushups

$description = "The one-arm handstand pushup is the ultimate shoulder and arm exercise. Forget bench presses-all they cause is injury and grief. Work your way carefully through the handstand pushup series right up to this Master Step and you will be stronger-in terms of pure, functional, pick someone up and throw them power-than any bench presser you meet. In terms of weights, it's the equivalent (for a two hundred pound man) of a one-arm two hundred pound press-that's four hundred pounds on a bar! How many guys do you know who can even pick up four hundred pounds, let alone shoulder press it? And calisthenics will give you this power safely-with healthy shoulders.<br><b>Perfecting:</b><br>You will have to work into this exercise by gradually increasing depth. In truth, the only way to really master this exercise is to spend years-maybe three years or more-working on it. But you were planning on getting three years older anyway, right? So why not be super-strong when you get there?";

$description = mysql_real_escape_string($description);

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 10.1, 'One-Arm Handstand Pushups', '$description', '1 set of 1 (each side)', 'pictures/handstand10')";

mysql_query($q) or DIE("Handstand 10.1 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 10.2, 'One-Arm Handstand Pushups', '$description', '2 sets of 2 (each side)', 'pictures/handstand10')";

mysql_query($q) or DIE("Handstand 10.2 not inserted. ".mysql_error());

$q = "INSERT INTO exercises (type, level, name, description, workout, picture) VALUES ('handstand', 10.3, 'One-Arm Handstand Pushups', '$description', '1 set of 5 (each side)', 'pictures/handstand10')";

mysql_query($q) or DIE("Handstand 10.3 not inserted. ".mysql_error());

echo "Handstands done!<br>";

echo "IT'S ALL DONE.";

?>