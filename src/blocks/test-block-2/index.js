import { registerBlockType } from '@wordpress/blocks';
import './style.editor.scss';
import { textDomain, Colors } from '../../block-data/block-data';
import Edit from './Edit.js';
import Save from './Save.js';

registerBlockType(`${textDomain}/test-block-2`, {
	icon: {
		background: Colors.white,
		foreground: Colors.main,
		src: (
			<svg
				xmlns="http://www.w3.org/2000/svg"
				enable-background="new 0 0 24 24"
				height="24px"
				viewBox="0 0 24 24"
				width="24px"
			>
				<rect fill="none" height="24" width="24" />
				<path d="M3,3v8h8V3H3z M9,9H5V5h4V9z M3,13v8h8v-8H3z M9,19H5v-4h4V19z M13,3v8h8V3H13z M19,9h-4V5h4V9z M13,13v8h8v-8H13z M19,19h-4v-4h4V19z" />
			</svg>
		),
	},
	edit: Edit,
	save: Save,
});
