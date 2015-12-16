{
    "id":{$comment["id"]|json_encode},
    "ip":{$comment["ip"]|json_encode},
    "text":{$comment["text"]|json_encode},
    "parent":{$comment["parent"]|json_encode},
    "gcm":{$comment["gcm"]|json_encode},
    "date":{$comment["date"]|date_format:"%d/%m/%Y %H:%M:%S"|json_encode},
    "parent_list":[
{assign var="currentItem" value=0}
{assign var="lastItem" value=count($parent_list)}
{foreach $parent_list as $comment}
    {
        "id":{$comment["id"]|json_encode},
        "ip":{$comment["ip"]|json_encode},
        "longtext":{$comment["text"]|json_encode},
        "text":{$comment["text"]|truncate:10:"":true|json_encode},
        "parent":{$comment["parent"]|json_encode},
        "gcm":{$comment["gcm"]|json_encode},
        "num_comments":{$comment["num_comments"]|json_encode},
        "date":{$comment["date"]|date_format:"%d/%m/%Y %H:%M:%S"|json_encode}
    }
    {assign var="currentItem" value=$currentItem+1}    
    {if $currentItem < $lastItem},{/if}
{/foreach}
]
}

