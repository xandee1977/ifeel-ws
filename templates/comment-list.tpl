[
{assign var="currentItem" value=0}
{assign var="lastItem" value=count($list_comments)}
{foreach $list_comments as $comment}
    {
        "id":{$comment["id"]|json_encode},
        "ip":{$comment["ip"]|json_encode},
        "text":{$comment["text"]|json_encode},
        "parent":{$comment["parent"]|json_encode},
        "gcm":{$comment["gcm"]|json_encode},
        "num_comments":{$comment["num_comments"]|json_encode},
        "country":{$comment["country"]|default:null|json_encode},
        "city":{$comment["city"]|default:null|json_encode},
        "date":{$comment["date"]|date_format:"%d/%m/%Y %H:%M:%S"|json_encode}
    }
    {assign var="currentItem" value=$currentItem+1}    
    {if $currentItem < $lastItem},{/if}
{/foreach}
]