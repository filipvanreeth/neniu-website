<?php
use function Neniu\renderContactCard;
use function Neniu\translate;
?>

<section id="contact-section" class="contact">
    <div class="container container--constrained contact__container">
        <h1 class="contact__title"><?= translate('contact-section.title') ?></h1>
        <p class="contact__text-lead"><?= translate(key: 'contact-section.text-lead') ?></p>
        <p class="contact__text"><?= translate('contact-section.text') ?></p>
        <div class="contact-cards">
            <div class="contact-cards__item">
                <?php
                renderContactCard(
                    style: 'style-1',
                    svg: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round" class="contact-card__icon-image">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M20 3h-2a2 2 0 0 0 -2 2v14a2 2 0 0 0 2 2h2a2 2 0 0 0 2 -2v-14a2 2 0 0 0 -2 -2" />
                        <path d="M16 4h-11a3 3 0 0 0 -3 3v10a3 3 0 0 0 3 3h11" />
                        <path d="M12 8h-6v3h6l0 -3" />
                        <path d="M12 14v.01" />
                        <path d="M9 14v.01" />
                        <path d="M6 14v.01" />
                        <path d="M12 17v.01" />
                        <path d="M9 17v.01" />
                        <path d="M6 17v.01" />
                    </svg>',
                    buttonLabel: translate('contact-card-call.button-label'),
                    buttonLink: 'tel:3215488888',
                    buttonAttributes: [],
                    description: translate('contact-card-call.description')
                ) ?>
            </div>
            <div class="contact-cards__item">
                <?php
                renderContactCard(
                    style: 'style-2',
                    svg: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round" class="contact-card__icon-image">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" />
                        <path d="M14 18a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                        <path d="M15 3v4" />
                        <path d="M7 3v4" />
                        <path d="M3 11h16" />
                        <path d="M18 16.496v1.504l1 1" />
                    </svg>',
                    buttonLabel: translate(key: 'contact-card-appointment.button-label'),
                    buttonLink: null,
                    buttonAttributes: [
                        'data-cal-link' => 'neniu.help/hulp-slachtoffers',
                        'data-cal-config' => json_encode([
                            'layout' => 'month_view',
                        ]),
                    ],
                    description: translate('contact-card-appointment.description')
                ) ?>
            </div>
            <div class="contact-cards__item">
                <?php
                renderContactCard(
                    style: 'style-3',
                    svg: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round" class="contact-card__icon-image">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                        <path d="M3 7l9 6l9 -6" />
                    </svg>',
                    buttonLabel: translate(key: 'contact-card-email.button-label'),
                    buttonLink: 'mailto:abuse@neniu.help',
                    description: translate(key: 'contact-card-email.description'),
                    buttonAttributes: []
                ) ?>
            </div>
        </div>
    </div>
    <!-- Cal element-click embed code begins -->
    <script type="text/javascript">
        (function (C, A, L) { let p = function (a, ar) { a.q.push(ar); }; let d = C.document; C.Cal = C.Cal || function () { let cal = C.Cal; let ar = arguments; if (!cal.loaded) { cal.ns = {}; cal.q = cal.q || []; d.head.appendChild(d.createElement("script")).src = A; cal.loaded = true; } if (ar[0] === L) { const api = function () { p(api, arguments); }; const namespace = ar[1]; api.q = api.q || []; if (typeof namespace === "string") { cal.ns[namespace] = cal.ns[namespace] || api; p(cal.ns[namespace], ar); p(cal, ["initNamespace", namespace]); } else p(cal, ar); return; } p(cal, ar); }; })(window, "https://app.cal.eu/embed/embed.js", "init");
        Cal("init", "30min", { origin: "https://app.cal.eu" });
        Cal.config = Cal.config || {};
        Cal.config.forwardQueryParams = true;
        Cal.ns["30min"]("ui", { "cssVarsPerTheme": { "light": { "cal-brand": "#1f3a5e" }, "dark": { "cal-brand": "#fafafa" } }, "hideEventTypeDetails": false, "layout": "month_view" });
    </script>
    <!-- Cal element-click embed code ends -->
</section>