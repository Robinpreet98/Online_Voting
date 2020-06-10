<!DOCTYPE html>
<html>

<body>
<?php include "public_header.php" ?>
<!--end of slider section-->
<section class="main__middle__container homepage">
    <section class="main__middle__container">
        <div class="container">
            <div class="row nothing">
                <section class="col-md-8 pull-right main-content">
                    <div class="row titles greener text-center">
                    <h2>Welcome to eVote</h2>

                        <p style="text-align: justify;"><strong>Voting is a method for a group such as a meeting or an electorate to
                            make a decision or express an opinion—often following discussions,
                            debates, or election campaigns. Democracies elect holders of high office by voting.
                        </strong></p>
                        <p style="text-align: justify;"> <strong>In a democracy, a government is chosen by voting in an election:
                            a way for an electorate to elect, i.e. choose, among several
                            candidates for rule. In a representative democracy voting is
                            the method by which the electorate appoints its representatives in
                            its government. In a direct democracy, voting
                            is the method by which the electorate directly make decisions, turn bills into laws, etc.</strong></p>
                         <p style="text-align: justify;"><strong>In a democracy, a government is chosen by voting in an election: a way for
                        an electorate to elect, i.e. choose, among several candidates for rule.
                        In a representative democracy voting is the method by which the electorate
                        appoints its representatives in its government. In a direct democracy, voting
                        is the method by which the electorate directly make decisions, turn bills into laws, etc.</strong></p>
                        <p style="text-align: justify;"><strong>Different voting systems use different types of votes. A "Plurality voting system" does
                            not require the winner to achieve a vote majority, or more than fifty percent of the total
                            votes cast. In a voting system that uses a single vote per race, when more than
                            two candidates run, the winner may commonly have less than fifty percent of the vote.</strong></p>
                        <p style="text-align: justify;"><strong>To understand why a single vote per race tends to favor less centric candidates,
                            consider a simple lab experiment where students in a class vote for their favorite marble.
                            If five marbles are assigned names and are placed "up for election," and if three of them
                            are green, one is red, and one is blue, then a green marble will rarely win the election.
                            The reason is that the three green marbles will split the votes of those who prefer green.
                            In fact, in this analogy, the only way that a green marble is likely to win is if more than
                            sixty percent of the voters prefer green. If the same percentage of people prefer green as
                            those who prefer red and blue, that is to say if 33 percent of the voters prefer green, 33
                            percent prefer blue, and 33 percent prefer red, then each green marble will only get eleven
                            percent of the vote, while the red and blue marbles will each get 33 percent, putting the
                            green marbles at a serious disadvantage. If the experiment is repeated with other colors,
                            the color that is in the majority will still rarely win. In other words, from a purely
                            mathematical perspective, a single-vote system tends to favor a winner that is different
                            from the majority. If the experiment is repeated using approval voting, where voters are
                            encouraged to vote for as many candidates as they approve of, then the winner is much more
                            likely to be any one of the five marbles,because people who prefer green will be able to
                            vote for every one of the green marbles.</strong>h</p>
                        <p style="text-align: justify;"><strong>Modern political science has questioned whether average citizens have
                        sufficient political information to cast meaningful votes. A series of
                        studies coming out of the University of Michigan in the 1950s and 1960s
                        argued that voters lack a basic understanding of current issues, the liberal
                        –conservative ideological dimension, and the relative ideological dilemma.
                        Studies from other institutions have suggested that the
                        physical appearance of candidates is a criterion upon which voters base their decision.</strong></p>
                    </div>
                </section>
                <aside class="col-md-4 pull-left">
                    <h3><span>Election Results</span></h3>
                    <?php
                    include "connection.php";
                    $select="select * from candidate";
                    $res=mysqli_query($conn,$select);
                    ?>
                    <marquee direction="down" behaviour="slide" onmouseover="this.stop()" onmouseout="this.start()">

                        <table>
                            <?php
                                while($row=mysqli_fetch_array($res))
                                {
                                    ?>
                                    <tr>
                                        <td align="center" style="color: #2ecc71;">
                                            <img src="<?php echo $row[3] ?>" style="height:250px;width: 250px;">
                                            <br>
                                            Candidate Name : <strong><?php echo strtoupper($row[1]) ?></strong> <br>
                                            Total Vote (s) :
                                            <?php
                                            $count="select count(*) from voter where cand_id=".$row[0];
                                            $count_res=mysqli_query($conn,$count);
                                            $count_row=mysqli_fetch_array($count_res);
                                            echo "<strong>$count_row[0]</strong>
                                            <br>
                                            <hr>";
                                            ?>
                                        </td>
                                    </tr>
                            <?php
                                }
                            ?>
                        </table>
                    </marquee>
                </aside>
            </div>
        </div>

    </section>
</section>
<?php include "footer.html" ?>
</body>
</html>
