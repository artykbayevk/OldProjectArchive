//
//  BlogTableViewCell.swift
//  F#01
//
//  Created by Kamalkhan Artykbayev on 20.04.16.
//  Copyright © 2016 Kamalkhan Artykbayev. All rights reserved.
//

import UIKit

class BlogTableViewCell: UITableViewCell {

    @IBOutlet weak var authorInCell: UILabel!
    @IBOutlet weak var textInCell: UILabel!
    @IBOutlet weak var typeInCell: UILabel!
    @IBOutlet weak var titleInCell: UILabel!
    override func awakeFromNib() {
        super.awakeFromNib()
        // Initialization code
    }

    override func setSelected(selected: Bool, animated: Bool) {
        super.setSelected(selected, animated: animated)

        // Configure the view for the selected state
    }

}
