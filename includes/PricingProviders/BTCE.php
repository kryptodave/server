<?php

namespace PricingProviders;

use PricingProvider;
use JSON;
use Amount;
use Pricing\Traits\SimplePricer;


class BTCE implements PricingProvider {
	use SimplePricer;

	private function fetchPrice($ticker) {
		if (!isset($ticker['ticker']['buy'])) {
			throw new \UnexpectedValueException('Could not retrieve pricing data.');
		}
		
		return new Amount($ticker['ticker']['buy']);
	}
	
	private function getTickerURL() {
		return 'https://btc-e.com/api/2/btc_eur/ticker';
	}
}

