<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mentality Tester</title>
    <link rel="icon" type="image/png" href="img/logo.png">  
    <?php include("nav_helper.php"); ?>
    <link rel="stylesheet" type="text/css" href="stylenew.css">
    <style>   
        h1{
            color:sienna;
        }
        h2{
            color:darkred;
        }

        div{
              border:5px solid #000033;
              margin:15px;
              padding:2px;
              border-radius:12px;
              
              background:url('img/mentality.jpg');
              width: 1300;
              height: auto;
              background: cover;
          }
          h4{
              color:darksalmon;
        }   
    </style>
</head>
<body>
    <?php include("search_helper.php"); ?>
    <h1>Mentality:--------------------(All is Required!!!!)</h1>
    <div>       
        <h2>Mentality Taster:</h2>
        <form action="Result.php" method="post">
            <div class="block">
                <label for="q1">Q1. Have you decided upon a definite major goal in life?</label>
                    <input type="radio" name="q1" id="q1" value="yes">Yes
                    <input type="radio" name="q1" id="q1" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q2">Q2. Have you set a time limit for reaching that goal? </label>
                    <input type="radio" name="q2" id="q2" value="yes">Yes
                    <input type="radio" name="q2" id="q2" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q3">Q3.  Do you have specific plans for achieving your goal in life?</label>
                    <input type="radio" name="q3" id="q3" value="yes">Yes
                    <input type="radio" name="q3" id="q3" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q4">Q4.  Have you determined what definite benefits your goal in life will bring you?</label>
                    <input type="radio" name="q4" id="q4" value="yes">Yes
                    <input type="radio" name="q4" id="q4" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q5">Q5.  Do you know what is meant by a positive mental attitude?</label>
                    <input type="radio" name="q5" id="q5" value="yes">Yes
                    <input type="radio" name="q5" id="q5" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q6">Q6. Do you control your mental attitude?</label>
                    <input type="radio" name="q6" id="q6" value="yes">Yes
                    <input type="radio" name="q6" id="q6" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q7">Q7. Do you know the only thing over which anyone has complete power of control? </label>
                    <input type="radio" name="q7" id="q7" value="yes">Yes
                    <input type="radio" name="q7" id="q7" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q8">Q8.  Do you know how to detect a negative mental attitude in yourself and others?</label>
                    <input type="radio" name="q8" id="q8" value="yes">Yes
                    <input type="radio" name="q8" id="q8" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q9">Q9.  Do you know how to make PMA a habit?</label>
                    <input type="radio" name="q9" id="q9" value="yes">Yes
                    <input type="radio" name="q9" id="q9" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q10">Q10.  Do you make a habit of rendering more and better service than you are paid for?</label>
                    <input type="radio" name="q10" id="q10" value="yes">Yes
                    <input type="radio" name="q10" id="q10" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q11">Q11.  Do you know when an employee is entitled to more pay?</label>
                    <input type="radio" name="q11" id="q11" value="yes">Yes
                    <input type="radio" name="q11" id="q11" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q12">Q12. Do you know of anyone who has achieved success in any calling without doing more than he was paid to do?</label>
                    <input type="radio" name="q12" id="q12" value="yes">Yes
                    <input type="radio" name="q12" id="q12" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q13">Q13. Do you believe anyone has a right to expect an increase in salary unless he is doing more than he is paid for?</label>
                    <input type="radio" name="q13" id="q13" value="yes">Yes
                    <input type="radio" name="q13" id="q13" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q14">Q14. If you were your own employer, would you be satisfied with the sort of service you are now rendering as an employee?</label>
                    <input type="radio" name="q14" id="q14" value="yes">Yes
                    <input type="radio" name="q14" id="q14" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q15">Q15. Do you make it your duty constantly to learn more about your occupation?</label>
                    <input type="radio" name="q15" id="q15" value="yes">Yes
                    <input type="radio" name="q15" id="q15" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q16">Q16. Is it your habit to express "opinions" on subjects with which you are not familiar? </label>
                    <input type="radio" name="q16" id="q16" value="yes">Yes
                    <input type="radio" name="q16" id="q16" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q17">Q17. Do you know how to find the facts when you need knowledge?</label>
                    <input type="radio" name="q17" id="q17" value="yes">Yes
                    <input type="radio" name="q17" id="q17" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q2">Q18. Do you hold your tongue when angry?</label>
                    <input type="radio" name="q18" id="q18" value="yes">Yes
                    <input type="radio" name="q18" id="q18" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q2">Q19.  Is it your habit to speak before you think? </label>
                    <input type="radio" name="q19" id="q19" value="yes">Yes
                    <input type="radio" name="q19" id="q19" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q20">Q20. Do you lose your patience easily? </label>
                    <input type="radio" name="q20" id="q20" value="yes">Yes
                    <input type="radio" name="q20" id="q20" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q21">Q21. Are you generally even-tempered? </label>
                    <input type="radio" name="q21" id="q21" value="yes">Yes
                    <input type="radio" name="q21" id="q21" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q22">Q22. Is it your habit to allow your emotions to overpower your reason?</label>
                    <input type="radio" name="q22" id="q22" value="yes">Yes
                    <input type="radio" name="q22" id="q22" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q23">Q23. Are you influencing other people to help you attain your goal in life?</label>
                    <input type="radio" name="q23" id="q23" value="yes">Yes
                    <input type="radio" name="q23" id="q23" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q24">Q24.  Do you believe that a person can succeed in life without the aid of others? </label>
                    <input type="radio" name="q24" id="q24" value="yes">Yes
                    <input type="radio" name="q24" id="q24" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q25">Q25. Do you believe a man can easily succeed in his occupation if he is opposed by his wife or other members of his family?</label>
                    <input type="radio" name="q25" id="q25" value="yes">Yes
                    <input type="radio" name="q25" id="q25" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q26">Q26. Are there advantages when an employer and an employee work together in harmony? </label>
                    <input type="radio" name="q26" id="q26" value="yes">Yes
                    <input type="radio" name="q26" id="q26" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q27">Q27. Are you proud when a group to which you belong is praised?</label>
                    <input type="radio" name="q27" id="q27" value="yes">Yes
                    <input type="radio" name="q27" id="q27" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q28">Q28. Do you have faith in Infinite Intelligence?</label>
                    <input type="radio" name="q28" id="q28" value="yes">Yes
                    <input type="radio" name="q28" id="q28" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q29">Q29. Are you a person of integrity?</label>
                    <input type="radio" name="q29" id="q29" value="yes">Yes
                    <input type="radio" name="q29" id="q29" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q30">Q30. Do you have confidence in your ability to do what you decide to do?</label>
                    <input type="radio" name="q30" id="q30" value="yes">Yes
                    <input type="radio" name="q30" id="q30" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q31">Q31. Are you reasonably free from these seven basic fears: (1) fear of poverty? (2) fear of criticism? (3) fear of ill health? (4) fear of loss of love? (5) fear of loss of liberty? (6) fear of old age? (7) fear of death?</label>
                    <input type="radio" name="q31" id="q31" value="yes">Yes
                    <input type="radio" name="q31" id="q31" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q32">Q32.  Are your habits offensive to others? </label>
                    <input type="radio" name="q32" id="q32" value="yes">Yes
                    <input type="radio" name="q32" id="q32" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q33">Q33. Is it your habit to apply the Golden Rule? </label>
                    <input type="radio" name="q33" id="q33" value="yes">Yes
                    <input type="radio" name="q33" id="q33" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q34">Q34. Are you liked by those with whom you work?</label>
                    <input type="radio" name="q34" id="q34" value="yes">Yes
                    <input type="radio" name="q34" id="q34" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q35">Q35.  Do you bore others?</label>
                    <input type="radio" name="q35" id="q35" value="yes">Yes
                    <input type="radio" name="q35" id="q35" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q36">Q36. Do you plan your work?</label>
                    <input type="radio" name="q36" id="q36" value="yes">Yes
                    <input type="radio" name="q36" id="q36" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q37">Q37. Must your work be planned for you?</label>
                    <input type="radio" name="q37" id="q37" value="yes">Yes
                    <input type="radio" name="q37" id="q37" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q38">Q38. Do you possess outstanding qualitiesnot possessed by others in your line of work?</label>
                    <input type="radio" name="q38" id="q38" value="yes">Yes
                    <input type="radio" name="q38" id="q38" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q39">Q39.  Is it your habit to procrastinate? </label>
                    <input type="radio" name="q39" id="39" value="yes">Yes
                    <input type="radio" name="q39" id="39" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q40">Q40.  Is it your habit to try to create better plans for doing your work more efficiently?</label>
                    <input type="radio" name="q40" id="q40" value="yes">Yes
                    <input type="radio" name="q40" id="q40" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q41">Q41. Are you an enthusiastic person?</label>
                    <input type="radio" name="q41" id="q41" value="yes">Yes
                    <input type="radio" name="q41" id="q41" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q42">Q42. Do you direct your enthusiasm toward carrying out your plans?</label>
                    <input type="radio" name="q42" id="q42" value="yes">Yes
                    <input type="radio" name="q42" id="q42" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q43">Q43. Does your enthusiasm overpower your judgment?</label>
                    <input type="radio" name="q43" id="q43" value="yes">Yes
                    <input type="radio" name="q43" id="q43" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q44">Q44. Is it your habit to concentrate your thoughts on what you are doing?</label>
                    <input type="radio" name="q44" id="q44" value="yes">Yes
                    <input type="radio" name="q44" id="q44" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q45">Q45.  Are you easily influenced to change your plans or your decisions? </label>
                    <input type="radio" name="q45" id="q45" value="yes">Yes
                    <input type="radio" name="q45" id="q45" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q46">Q46. Are you inclined to abandon your aims and plans when you meet opposition?</label>
                    <input type="radio" name="q46" id="q46" value="yes">Yes
                    <input type="radio" name="q46" id="q46" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q47">Q47. Do you keep working regardless of unavoidable distractions?</label>
                    <input type="radio" name="q47" id="q47" value="yes">Yes
                    <input type="radio" name="q47" id="q47" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q48">Q48.  Do you get along harmoniously with others?</label>
                    <input type="radio" name="q48" id="q48" value="yes">Yes
                    <input type="radio" name="q48" id="q48" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q49">Q49. Do you grant favors as freely as you ask them? </label>
                    <input type="radio" name="q49" id="q49" value="yes">Yes
                    <input type="radio" name="q49" id="q49" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q50">Q50. Do you have frequent disagreements with others?</label>
                    <input type="radio" name="q50" id="q50" value="yes">Yes
                    <input type="radio" name="q50" id="q50" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q51">Q51.  Are there great advantages in friendly cooperation among co-workers? </label>
                    <input type="radio" name="q51" id="q51" value="yes">Yes
                    <input type="radio" name="q51" id="q51" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q52">Q52. Are you aware of the damage one can cause by not cooperating with co-workers?</label>
                    <input type="radio" name="q52" id="q52" value="yes">Yes
                    <input type="radio" name="q52" id="q52" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q53">Q53. Does defeat cause you to stop trying? </label>
                    <input type="radio" name="q53" id="q53" value="yes">Yes
                    <input type="radio" name="q53" id="q53" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q54">Q54. If you fail in a given effort, do you keep trying?</label>
                    <input type="radio" name="q54" id="q54" value="yes">Yes
                    <input type="radio" name="q54" id="q54" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q55">Q55. Is temporary defeat the same as failure?</label>
                    <input type="radio" name="q55" id="q55" value="yes">Yes
                    <input type="radio" name="q55" id="q55" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q56">Q56. Have you learned any lessons from defeat?</label>
                    <input type="radio" name="q56" id="q56" value="yes">Yes
                    <input type="radio" name="q56" id="q56" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q57">Q57. Do you know how defeat can be converted into an asset that will lead to success?</label>
                    <input type="radio" name="q57" id="q57" value="yes">Yes
                    <input type="radio" name="q57" id="q57" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q58">Q58. Do you use your imagination constructively?</label>
                    <input type="radio" name="q58" id="q58" value="yes">Yes
                    <input type="radio" name="q58" id="q58" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q59">Q59. Do you make your own decisions?</label>
                    <input type="radio" name="q59" id="q59" value="yes">Yes
                    <input type="radio" name="q59" id="q59" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q60">Q60. Is the man who only follows instructions always worth more than the man who also creates new ideas?</label>
                    <input type="radio" name="q60" id="q60" value="yes">Yes
                    <input type="radio" name="q60" id="q60" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q61">Q61. Are you inventive?</label>
                    <input type="radio" name="q61" id="q61" value="yes">Yes
                    <input type="radio" name="q61" id="q61" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q62">Q62. Do you create practical ideas in connection with your work?</label>
                    <input type="radio" name="q62" id="q62" value="yes">Yes
                    <input type="radio" name="q62" id="q62" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q63">Q63. When desirable, do you seek sound advice? </label>
                    <input type="radio" name="q63" id="q63" value="yes">Yes
                    <input type="radio" name="q63" id="q63" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q64">Q64. Do you save a fixed percentage of your income?</label>
                    <input type="radio" name="q64" id="q64" value="yes">Yes
                    <input type="radio" name="q64" id="q64" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q65">Q65. Do you spend money without regard to your future source of income? </label>
                    <input type="radio" name="q65" id="q65" value="yes">Yes
                    <input type="radio" name="q65" id="q65" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q66">Q66. Do you get sufficient sleep each night?</label>
                    <input type="radio" name="q66" id="q66" value="yes">Yes
                    <input type="radio" name="q66" id="q66" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q67">Q67. Is it your habit to employ spare time studying self-improvement books?</label>
                    <input type="radio" name="q67" id="q67" value="yes">Yes
                    <input type="radio" name="q67" id="q67" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q68">Q68. Do you know five essential factors of sound health?</label>
                    <input type="radio" name="q68" id="q68" value="yes">Yes
                    <input type="radio" name="q68" id="q68" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q69">Q69. Do you know where sound health begins?</label>
                    <input type="radio" name="q69" id="q69" value="yes">Yes
                    <input type="radio" name="q69" id="q69" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q70">Q70. Are you aware of the relation of relaxation to sound health?</label>
                    <input type="radio" name="q70" id="q70" value="yes">Yes
                    <input type="radio" name="q70" id="q70" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q71">Q71. Do you know the four important factors necessary for the proper balancing of sound health?</label>
                    <input type="radio" name="q71" id="q71" value="yes">Yes
                    <input type="radio" name="q71" id="q71" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q72">Q72. Do you know the meaning of "hypochondria" and "psychosomatic illness"?</label>
                    <input type="radio" name="q72" id="q72" value="yes">Yes
                    <input type="radio" name="q72" id="q72" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q73">Q73. Do you have habits which you feel you cannot control?</label>
                    <input type="radio" name="q73" id="q73" value="yes">Yes
                    <input type="radio" name="q73" id="q73" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q74">Q74. Have you recently eliminated undesirable habits?</label>
                    <input type="radio" name="q74" id="q74" value="yes">Yes
                    <input type="radio" name="q74" id="q74" value="no">No
                    <br>
            </div>
            <div class="block">
                <label for="q75">Q75. Have you recently developed any new, desirable habits?</label>
                    <input type="radio" name="q75" id="q75" value="yes">Yes
                    <input type="radio" name="q75" id="q75" value="no">No
                    <br>
            </div>
            <input type="submit" name="submit" value="check">
        </form>
    </div>    
    <?php include("Datalist.php");  ?>
</body>
</html>