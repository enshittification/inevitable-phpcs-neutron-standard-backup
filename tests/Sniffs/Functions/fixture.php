<?php
class MyClass {
	public function notTooLong() {
		/**
		 * Lorem ipsum
		 * Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ullamcorper
		 * turpis vel lacus tincidunt accumsan. Pellentesque varius tristique tortor, non
		 * tincidunt elit porta ac. Praesent eget interdum turpis. Donec sodales ultrices
		 * metus at cursus. Phasellus vehicula augue eu elit semper mollis vitae aliquam
		 * lacus. Proin a egestas dui. Nam aliquet ultricies ipsum, eget bibendum lacus.
		 * Donec ut neque ultricies, mattis urna non, ullamcorper risus. Mauris efficitur
		 * tortor justo, a commodo justo tempus non. Nullam commodo vehicula magna ac
		 * malesuada. Nulla suscipit vulputate feugiat. Donec quis dignissim mauris.
		 * Integer volutpat mi ut urna molestie, sit amet placerat felis vestibulum.
		 * Quisque vulputate, metus et viverra condimentum, lacus purus ultricies odio,
		 * non placerat justo erat vitae nulla. Duis viverra mauris mi, ac hendrerit metus
		 * dapibus iaculis.
		 * Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ullamcorper
		 * turpis vel lacus tincidunt accumsan. Pellentesque varius tristique tortor, non
		 * tincidunt elit porta ac. Praesent eget interdum turpis. Donec sodales ultrices
		 * metus at cursus. Phasellus vehicula augue eu elit semper mollis vitae aliquam
		 * lacus. Proin a egestas dui. Nam aliquet ultricies ipsum, eget bibendum lacus.
		 * Donec ut neque ultricies, mattis urna non, ullamcorper risus. Mauris efficitur
		 * tortor justo, a commodo justo tempus non. Nullam commodo vehicula magna ac
		 * malesuada. Nulla suscipit vulputate feugiat. Donec quis dignissim mauris.
		 * Integer volutpat mi ut urna molestie, sit amet placerat felis vestibulum.
		 * Quisque vulputate, metus et viverra condimentum, lacus purus ultricies odio,
		 * non placerat justo erat vitae nulla. Duis viverra mauris mi, ac hendrerit metus
		 * dapibus iaculis.
		 **/
		$foo = 'bar';
		$foo;
		$foo; // Hello
	}

	// Next line should report function too long
	public function tooLongWithComments() {
		$foo = 'bar';
		$foo;
		$foo;
		$foo;
		$foo;
		$foo;
		$foo;
		$foo;
		$foo; // Hello
		$foo; // Hello
		$foo; // Hello
		$foo; // Hello
		$foo; // Hello
		$foo; // Hello
		$foo;
		$foo;
		$foo; // Hello
		$foo; // Hello
		$foo; // Hello
		$foo; // Hello
		$foo; // Hello
		$foo; // Hello
	}

	public function doSomething() {
		$all = ['foo' => 'bar' ];
		$rest = array('x' => 'y');
		extract($all);
		$define = 'foo';
		$define;
		$rest;
	}

	// Next line should report function too long
	public function comparisonTest() {
		if ($actual = $this->getActual()) {
			echo $actual;
		}
		if (
			$actual = $this->getActual()
		) {
			echo $actual;
		}
		if ($actual = $this->getActual() == true) {
			echo $actual;
		}
		if ($actual = $this->getActual() > 3) {
			echo $actual;
		}
		if ($actual = $this->getActual() < 3) {
			echo $actual;
		}
		if ($actual = $this->getActual() <= 3) {
			echo $actual;
		}
		if ($actual = $this->getActual() >= 3) {
			echo $actual;
		}
		if ($actual = $this->getActual() === 3) {
			echo $actual;
		}
		if ($actual = $this->getActual() != 3) {
			echo $actual;
		}
		if ($actual = $this->getActual() !== 3) {
			echo $actual;
		}
		if (true == $actual = $this->getActual()) {
			echo $actual;
		}
		if ($actual) {
			echo 'yo';
		}
	}

	public function getActual(): string {
		return 'hello';
	}

	// Next line should warn about no type hint
	public function missingArgHint($arg1): string {
		return $arg1 . ' yolo';
	}

	// Next line should warn about no type hint
	public function missingReturnHint(string $arg1) {
		return $arg1 . ' yolo';
	}

	// Next line should warn about no type hint
	public function missingArgHintTwo($arg1, string $arg2): string {
		return $arg1 . ' yolo' . $arg2;
	}

	// Next line should warn about no type hint
	public function missingArgHintThree(string $arg1, $arg2): string {
		return $arg1 . ' yolo' . $arg2;
	}

	public function hasNoReturn(string $arg1, string $arg2) {
		$arg1;
		$arg2;
	}

	public function hasHints(string $arg1): MyClass {
		return new MyClass($arg1);
	}
}
