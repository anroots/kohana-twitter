<form action="<?=URL::base()?>dash/index" method="post">
    <textarea rows="2" cols="40" maxlength="140" name="post" placeholder="What's happening?"></textarea>
    <input type="submit" name="create" class="btn large primary" value="Send!"/>
</form>

<ul class="tweets">
    <? if ($posts->count() > 0):
        foreach ($posts as $post): ?>
        <li>
            <span class="tweet-id">#<?=$post->id?></span>
            <span class="tweet-content"><?=$post->post?></span>
            <span class="tweet-time">(<?=Date::fuzzy_span(strtotime($post->created))?>)</span>
        </li>
            <? endforeach;
    endif?>
    </ul>