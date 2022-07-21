/**
 * @jest-environment jsdom
 */

import { render, screen } from '@testing-library/react';
import '@testing-library/jest-dom';
import Card from 'components/card';
import React from 'react';

describe( 'Card', function () {
	it( 'can render', () => {
		render( <Card title="Title" /> );
		expect( screen.queryByRole( 'heading' ) ).toBeInTheDocument();
	} );
} );
