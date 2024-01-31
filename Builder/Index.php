<?php

namespace DesignPatterns\Builder;

class Index
{
	public function __construct()
	{
		$response = RequestBuilder::forge()
			->withUri(uri: 'Sample Uri')
			->withHeaders(headers: 'Sample Header')
			->withData(data: 'Sample Data')
			->withMethod(method: 'Sample Method')
			->withQueryString(queryString: [])
			->build();

		echo $response->run();
	}

}