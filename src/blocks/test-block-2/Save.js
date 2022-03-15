import "./style.scss";
import { __ } from '@wordpress/i18n';
import { RichText, useBlockProps } from '@wordpress/block-editor';
import classNames from 'classnames';

const SaveTestBlock2 = (props) => {
	const { attributes } = props;
	const { className, title } = attributes;
	const classes = classNames(className, {
		'gutenberg-multiblock-boilerplate-test-block-2': true,
	});

	const blockProps = useBlockProps.save({
		className: classes,
	});

	return (
		<div {...blockProps}>
			<RichText.Content tagName="h2" value={title} />
			<p>
				{__(
					'just another boilerplate test block but with an editable title'
				)}
			</p>
		</div>
	);
};
export default SaveTestBlock2;
