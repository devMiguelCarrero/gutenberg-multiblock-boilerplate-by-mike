import "./style.scss";

import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import { textDomain } from '../../block-data/block-data';
import classNames from 'classnames';

const SaveTournamentList = (props) => {
	const { attributes } = props;
	const { className } = attributes;

	const classes = classNames(className, {
		'gutenberg-multiblock-boilerplate-test-block-1': true,
	});

	const blockProps = useBlockProps.save({
		className: classes,
	});

	return (
		<div {...blockProps}>
			<h3>{__('Boilerplate Test Plugin 1', textDomain)}</h3>
			<p>
				{__(
					"I'm just a boilerplate plugin and i cannot do anything by myself. But you can modify my code and make sometinh awesome."
				)}
			</p>
		</div>
	);
};
export default SaveTournamentList;
