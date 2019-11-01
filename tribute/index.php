<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T-800 - Tribute</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/accordion.css">
</head>

<body>
    <main id="container-wrap" class="center">
        <h1 class="center" id="title">Cyberdyne Systems Series 800 Terminator</h1>
        <p class="text-center secondary-text">Skynet's first cybernetic organism, with living tissue over a hyperalloy endoskeleton</p>
        <figure id="img-div">
            <img alt="Terminator 2: Judgment Day - T-800">
            <figcaption class="text-center secondary-text"><i>Cyberdyne Systems Series 800 Terminator crushes the resistance</i>
            </figcaption>
        </figure>
        <section id="tribute-info">
            <h2>:: T800 Specifications</h2>
            <button class="accordion specs">CPU</button>
            <div class="panel">
                <p>The 800 Series Terminator contains a Neural Net Processor CPU, or "learning computer", contained within the endoskull and protected by inertial shock dampers. The CPU, developed by Cyberdyne Systems, is one of the most powerful microprocessors
                    ever built. As part of its vast internal databases, the T-800 contains detailed files on human anatomy and physiology so as to make it a more efficient killer. The CPU can also be updated with multiple database files related to
                    advanced infiltration techniques, basic training for soldiers, emergency medical training, sniper training, an extensive tactical database, and detailed files from other terminators making each unit a combat veteran.</p><br />
            </div>
            <button class="accordion specs">Self-Awareness</button>
            <div class="panel">
                <p>It appears as though some units which have had their CPU's set to read-write mode and have been in the battlefield for long periods have taken a new level of understanding, wherein they choose to fight for humans rather than against them,
                    as a rogue T-800's primary concern is self-protection this is understandable. Skynet sees these units as threats and has ordered that all other models to terminate them on sight. However, these units have developed a large database
                    of in-field improvisation, improving upon their combat ability and self-repair function. It is not uncommon for a rogue T-800 to improve its physical design by replacing or improving components of itself from other disabled units as
                    seen by a captured T-800 unit which showed multiple non-standard modifications, including crude armor plating, additional CPU's, multiple limbs, serrated talons and internal multiphasic weaponry powered by its internal fuel cell.</p>

                <p>Skynet has used such in-field modifications in its latest designs.</p>

                <p> The "Rogue" T-800s have achieved this level of autonomy by having their CPU set to "read-and-write" shortly after factory production. The CPU can be manually switched (this ensures that the switch is not activated by a virus or programming
                    glitch) from "read-only" to "read-and-write," enabling it to learn from its contact with humans, and therefore allowing it to conceal itself more effectively. However, some units have reached a level of understanding where they could
                    choose to accept commands from Skynet or even choose to fight against Skynet.</p>
            </div>
            <button class="accordion specs">Endoskeleton</button>
            <div class="panel">
                <p>The metal endoskeleton of the T-800 is a microprocessor controlled triple-armored hyper-alloy combat chassis and is constructed with frictionless bearings in its joints, and a servo-actuated control system. Its limbs are controlled
                    by axial drive motors and clavicular trailing links, allowing the T-800s to maneuver faster than the T-600 Terminators, as bursts of speed of up to 22 mph no longer threatened the joint assemblies. The T-800 was also
                    20% lighter and 40% stronger than the T-600. The armored frame is capable of withstanding most contemporary weapons with small caliber and sometimes even withstanding a direct hit from grenade launchers.</p>
            </div>
            <button class="accordion specs">Durability</button>
            <div class="panel">
                <p>Unlike their T-600 cousins, who could be easily dispatched via a well-aimed gunshot or burst of firepower to the cranium, the T-800 is more resistant to certain forms of attacks. The exact extent of what they can endure is subject to their
                    specific circumstances, but the general consensus is that most have displayed remarkable resilience to both conventional and unconventional combat engagements that would leave its predecessors as a pile of scrap metal.</p>

                <p> The T-800, while vulnerable to most plasma weaponry, was at least partially resistant to the weaker plasma weapons used by HK-Flying Mini Hunters.</p>

                <p> While T-800s are extremely resistant to small arms fire up to and including 5.56mm NATO assault rifle rounds, .50 BMG sniper rifle bullets are sufficient to penetrate their armored chassis, capable of disabling or even decapitating a T-800
                    with a single perfectly-aimed shot.</p>
            </div>
        </section>

        <h3 class="text-center secondary-text">Click <a href="https://terminator.fandom.com/wiki/T-800">here</a> to learn more about the Cyberdyne Systems Series 800 Terminator</h3>

    </main>
    <footer class="text-center">
        © <?php
            $copyYear = 2019;
            $curYear = date('Y');
            echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
            ?> Copyright - Xirrow
    </footer>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }

        var all = document.getElementsByClassName('specs');
        for (var i = 0; i < all.length; i++) {
            all[i].style.color = '#9b1c31';
        }
    </script>
</body>

</html>