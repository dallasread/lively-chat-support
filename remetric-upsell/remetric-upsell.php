<div class="remetric-upsell">
    <div class="container fade-in">
        <img src="<?php echo plugins_url( "lively-chat-support/remetric-upsell/all-new.jpg" ); ?>">
        <h1>The All-New <strong>Remetric</strong>.</h1>
        <h2>
            <span class="highlight">Lively Chat has been acquired by Remetric.</span><br><br>
            Remetric is more than just a chat; <em>it's a marketing story.</em><br>
            <strong>And YOU are a part of the story.</strong>
            <!-- <strong>"Simple website interactions that satisfy your customers."</strong> -->
        </h2>
        <div class="features copy">
            <p>
                Lively has been an incredible 5-year journey that we couldn't have done without you &mdash; and we're excited to finally move forward forging a new frontier in website interactivity. We absolutely love the work being done on Remetric, and we're sure you will too!
            </p>
            <ul>
                <li>
                    <strong>Can I still use the old Lively?</strong> Yes! The 1.0 version of Lively is here to stay. You'll also be able to upgrade to Remetric at your convenience, free of charge.
                </li>
                <li>
                    <strong>What happens to my convo history?</strong> Because Remetric is a separate product, no history or visitor information is copied to the new platform. This was a tough decision to make. Instead, we're doubling down on NEW Remetric features.
                </li>
                <li>
                    <strong>I feel slightly inconvenienced...</strong> A few moments into using Remetric, we promise you'll change your mind. Nevertheless, here's a coupon code for a $50 Remetric credit: <strong>FIFTY50</strong>.
                </li>
            </ul>
            <ul>
                <li>
                    <strong>Is Remetric FREE?</strong> Remetric is free to use, but, like Lively, maintains limits on its free plan. The limits are not on the number of visitors, but are feature-specific &mdash; this ensures equal treatment for all your users.
                </li>
                <li>
                    <strong>What happens to my paid Lively account?</strong> Remetric is a separate service and is handled separately. We have suspended all Lively accounts, so you'll never be billed for Lively again. We can offer you $50 Remetric credit: <strong>FIFTY50</strong>.
                </li>
                <li>
                    <strong>What are you waiting for?</strong> Remetric is built on Open Source and is community-driven through Marketing.js. We know you'll be thrilled with the result &mdash; it's time to dive in!
                </li>
            </ul>
            <p style="text-align: center;">
                <a href="?page=livelychatsupport&IS_REMETRIC=1" class="button button-primary button-big">
                    Start Using Remetric
                </a>
            </p>
        </div>

        <a href="?page=livelychatsupport&IS_REMETRIC=0" class="rather">
            I'd rather use the old Lively.
        </a>
    </div>
</div>

<style type="text/css">
    @-webkit-keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .fade-in {
        -webkit-animation-duration: 2s;
        animation-duration: 2s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        -webkit-animation-name: fadeIn;
        animation-name: fadeIn;
    }

    .remetric-upsell {
        background: #f1f1f1;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1;
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
    }

    .remetric-upsell * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        webkit-box-sizing: border-box;
    }

    .remetric-upsell .container {
        position: relative;
        margin: 7% auto;
        max-width: 640px;
        background: #fff;
        padding: 30px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .remetric-upsell .container .highlight {
        background: #FFEF00;
    }


    .remetric-upsell .container img {
        max-width: 100%;
    }

    .remetric-upsell .container h1 {
        color: #444;
        font-weight: 200;
        font-size: 60px;
        line-height: 1.1;
        text-align: center;
    }

    .remetric-upsell .container h2 {
        font-family: Palatino, Georgia, Times New Roman, Times;
        font-weight: 200;
        font-size: 18px;
        line-height: 1.5;
        text-align: center;
    }

    .remetric-upsell .container .copy {
        margin: 40px 0 0;
    }

    .remetric-upsell .container .copy:after {
        display: block;
        content: '';
        clear: both;
    }

    .remetric-upsell .container .copy p,
    .remetric-upsell .container .copy li {
        font-family: Palatino, Georgia, Times New Roman, Times;
        font-size: 14px;
        line-height: 1.7;
    }

    .remetric-upsell .container .copy li,
    .remetric-upsell .container .copy ul,
    .remetric-upsell .container .copy p {
        margin-bottom: 25px;
    }

    .remetric-upsell .container .copy ul {
        list-style: disc;
        margin: 0 auto;
        float: left;
        width: 50%;
        padding-left: 30px;
    }

    .remetric-upsell .container .button-big,
    .remetric-upsell .container .button-big:focus {
        font-size: 22px;
        text-align: center;
        padding: 14px 70px;
        height: auto;
        background: #04C669;
        border-color: #03B861;
        text-shadow: none;
        box-shadow: none;
    }

    .remetric-upsell .container .button-big:hover,
    .remetric-upsell .container .button-big:active {
        background: #04DD74;
        border-color: #03CD6B;
        box-shadow: none;
    }

    .remetric-upsell .container .rather {
        position: absolute;
        bottom: -2.5em;
        right: 0;
        font-size: 10px;
        color: #999;
    }
</style>
