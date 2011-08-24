<header>
    <h2>Design Review</h2>

    <? if (!empty($design->name)): ?>
    <p>
        <strong><?=$design->name?>    </strong> has shared this link with you in the hopes that you'd give him/her some
        quick
        feedback about the design presented to you shortly.
    </p>
    <? else: ?>
    <p>
        You've been given this link in the hopes that you'd give the author some quick
        feedback about the design presented to you shortly.
    </p>
    <? endif ?>

    <? if (!empty($design->description)): ?>
        <h3>Description</h3>
        <?=$design->description?>
    <? endif ?>
</header>

<h3>What's going to happen</h3>
<p>When you click the button below, you have <strong>30</strong> seconds to look at
    a snapshot of a website. Afterwards, you have <strong>up to two minutes</strong> to jot down some quick notes.
</p>

<p>An example:</p>
<blockquote>
    The sidebar is too fat. Align the links to the left, it's easier to the eye. The footer has no useful info.
    I think the picture should be moved a bit to the left.
</blockquote>
    
<h3>Ready?</h3>
<a href="<?=URL::base()?>dash/view/<?=$design->hash?>/start" class="button">Show Me The Design For 30 Seconds!</a>
