import './style.editor.scss';

import { RichText, useBlockProps } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';
import { textDomain } from '../../block-data/block-data';
import classNames from 'classnames';

const EditTestBlock2 = (props) => {
	const { attributes, setAttributes } = props;
	const { className, title } = attributes;
	const classes = classNames(className, {
		'gutenberg-multiblock-boilerplate-test-block-2': true,
	});

	const onChangeTitle = (title) => {
		setAttributes({ title });
	};

	const blockProps = useBlockProps({
		className: classes,
	});

	return (
		<div {...blockProps}>
			<RichText
				tagName="h2"
				onChange={onChangeTitle}
				value={title}
				placeholder={__(
					'Gutenberg Boilerplate Editable Title',
					textDomain
				)}
				formattingControl={['bold', 'italic']}
			/>
			<p>
				{__(
					'just another boilerplate test block but with an editable title'
				)}
			</p>
		</div>
	);
};
export default EditTestBlock2;
