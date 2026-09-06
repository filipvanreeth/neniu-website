import { useBlockProps } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';

export default function Edit() {
    return (
        <div {...useBlockProps()}>
            <strong>{__('CTA Actions', 'neniu')}</strong>
            <p>{__('Toont de drie vaste Neniu-acties.', 'neniu')}</p>
        </div>
    );
}
