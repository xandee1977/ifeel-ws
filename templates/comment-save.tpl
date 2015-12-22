{
    "id":{$comment["id"]|json_encode},
    "ip":{$comment["ip"]|json_encode},
    "text":{$comment["text"]|json_encode},
    "parent":{$comment["parent"]|json_encode},
    "gcm":{$comment["gcm"]|json_encode},
    "country":{$comment["country"]|default:null|json_encode},
	"city":{$comment["city"]|default:null|json_encode},
    "date":{$comment["date"]|date_format:"%d/%m/%Y %H:%M:%S"|json_encode}
}