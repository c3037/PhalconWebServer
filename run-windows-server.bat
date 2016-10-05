SET blackfire-server-id="7bf3bc6d-4d08-4ea9-a817-bf447643818d"
SET blackfire-server-token="838637aa45d88109238f8e2811dd55ad68ecccd86de05bd5d4af97ce3ed1af35"

START tools\php7nts\php.exe -S localhost:8000 -t source\public server-router.php
START tools\blackfire\blackfire-agent.exe -config="tools\blackfire\agent.ini" -server-id=%blackfire-server-id% -server-token=%blackfire-server-token%