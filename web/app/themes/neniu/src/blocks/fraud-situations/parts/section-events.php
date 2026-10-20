<?php
// use Neniu\Event\Event;
use function Neniu\renderBadge;
use function Neniu\renderHeroImage;
use function Neniu\renderIconDivider;
use function Neniu\translate;
?>

<section id="events-section" class="events-section">
    <div class="container container--constrained">
        <?php
        require_once __DIR__ . '/../../../Event/Event.php';
        $event1 = Neniu\Event\Event::Create(
            name: 'Event name 1',
            startDateTime: new DateTime(),
            endDateTime: new DateTime(),
            description: 'Description'
        );
        var_dump($event1);
        ?>
    </div>
</section>

<?= renderIconDivider('events') ?>